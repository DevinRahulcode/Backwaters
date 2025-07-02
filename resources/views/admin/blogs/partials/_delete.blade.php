<form method="POST" action="{{ route('blog.delete', $blog->id) }}" class="d-inline"
    onsubmit="return submitDeleteForm(this)">
  @csrf
  @method('delete')
   <button type="submit"
    class="btn btn-link">
  <i class="fal fa-trash-alt"></i>
  </button>
</form>
  
  