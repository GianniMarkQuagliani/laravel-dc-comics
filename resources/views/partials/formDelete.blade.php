<form class="d-inline-block" action=" {{ route('comics.destroy', $comic->id) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare {{ $comic->title }}?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
</form>
