<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal{{$item->id}}">
    <i class="fa-solid fa-trash"></i>
</button>

<div class="modal fade" id="modal{{$item->id}}" tabindex="-1" aria-labelledby="modalLabel{{ $item->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalLabel{{ $item->id }}">Delete project</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Confermi l'eliminazione di: '{{ $item->name }}'
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="{{ route('admin.' . $route . '.destroy', $item) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit" title="delete">Delete</button>
          </form>
        </div>
      </div>
    </div>
</div>
