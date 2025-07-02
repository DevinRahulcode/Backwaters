<script src="{{ url('back/js/vendors.bundle.js') }}"></script>
<script src="{{ url('back/js/app.bundle.js') }}"></script>
<script src="{{ url('back/js/sidebarActive.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Sweet Alert---}}
<script src="{{ url('back/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<script src="{{ url('back/js/datagrid/datatables/datatables.bundle.js') }}"></script>

<!-- page select 2 js below -->
<script src="{{ url('back/js/formplugins/select2/select2.bundle.js') }}"></script>

<!-- page ssummer note js below -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.js"></script>

<!-- common scripts -->
<script src="{{ url('back/js/common.js') }}"></script>

<script>
    window.onload = function() {
        document.getElementById("preloader").style.display = "none";
    };

    function confirmStatusChange(form) {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to change the status?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn-success',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, change it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });

            return false;
    }

 // Compression function
 function compressImage(fileInput, previewId = null, maxSize) {
    const file = fileInput.files[0];
    if (!file) return;

    // Only process images
    if (!file.type.match(/image.*/)) return;

    const reader = new FileReader();
    reader.onload = function(e) {
        const img = new Image();
        img.onload = function() {
            // Create canvas for compression
            const canvas = document.createElement('canvas');
            let width = img.width;
            let height = img.height;

            // Preserve aspect ratio while resizing larger images
            if (width > 1200 || height > 1200) {
                const ratio = Math.min(1200 / width, 1200 / height);
                width *= ratio;
                height *= ratio;
            }

            canvas.width = width;
            canvas.height = height;

            // Draw image on canvas
            const ctx = canvas.getContext('2d');
            ctx.drawImage(img, 0, 0, width, height);

            let quality = 0.9;
            let compressedFile;

            function compressWithQuality() {
                const dataUrl = canvas.toDataURL('image/jpeg', quality);

                fetch(dataUrl)
                    .then(res => res.blob())
                    .then(blob => {
                        compressedFile = new File([blob], file.name, {
                            type: 'image/jpeg',
                            lastModified: new Date().getTime()
                        });

                        console.log(
                            `Compressed size: ${compressedFile.size / 1024} KB, Quality: ${quality}`
                        );

                        if (compressedFile.size > maxSize && quality > 0.1) {
                            quality -= 0.1;
                            compressWithQuality();
                        } else {
                            // Optional preview
                            if (previewId) {
                                const preview = document.getElementById(previewId);
                                if (preview) {
                                    preview.src = dataUrl;
                                    preview.style.display = 'block';
                                }
                            }

                            // Replace file in input
                            const dataTransfer = new DataTransfer();
                            dataTransfer.items.add(compressedFile);
                            fileInput.files = dataTransfer.files;
                        }
                    });
            }

            compressWithQuality();
        };
        img.src = e.target.result;
    };
    reader.readAsDataURL(file);
}

</script>



