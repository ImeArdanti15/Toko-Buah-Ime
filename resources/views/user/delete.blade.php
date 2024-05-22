<form action="{{ route('user.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="text-red-400"><i class="fa-solid fa-trash"></i></button>
</form>
