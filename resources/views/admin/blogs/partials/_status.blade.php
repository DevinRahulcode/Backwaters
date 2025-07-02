<form method="get" action="{{ route('blog.change-status', $blog->id) }}" class="d-inline" onsubmit="return confirmStatusChange(this)">
  @csrf
  <button type="submit" class="btn btn-link">
      <i class="{{ $blog->status == 'Y' ? 'fal fa-check' : 'fal fa-backspace' }}"></i>
  </button>
</form>
