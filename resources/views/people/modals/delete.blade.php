<!-- DELETE button -->
<button type="button" name="delete" class='btn btn-danger shadow-lg' data-toggle="modal"
  data-target="#delete-{{$person->id}}-people">Delete profile</button>

<form action="{{ url('/people/'. $person->id) }}" , method="POST">
  @csrf
  @method('DELETE')

  <!-- Modal -->
  <div class="modal fade" id="delete-{{$person->id}}-people" tabindex="-1" role="dialog"
    aria-labelledby="delete-ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="delete-ModalLabel">Delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure to delete this profile?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Delete</button>
        </div>
      </div>
    </div>
  </div>
</form>