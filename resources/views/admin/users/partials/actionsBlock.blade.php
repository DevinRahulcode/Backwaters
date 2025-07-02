<form method="POST" action="{{ route('delete-user', $row->id) }}" class="d-inline"
  onsubmit="return submitDeleteForm(this)">
@csrf
@method('delete')
<button type="submit"
      class="btn btn-link relative flex justify-between w-full cursor-pointer select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
<i class="fal fa-trash-alt"></i>
</button>
</form>

