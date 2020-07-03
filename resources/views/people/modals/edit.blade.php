<!-- EDIT button -->

<button type="btn submit" class="btn btn-warning shadow-lg" data-toggle="modal"
  data-target="#edit-{{$person->id}}-people">Edit Profile</button>

<form action="{{url('people/'.$person->id.'/edit')}}" method="GET">
  <!-- Modal -->
  <div class="modal fade" id="edit-{{$person->id}}-people" tabindex="-1" role="dialog"
    aria-labelledby="edit-ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="edit-ModalLabel">Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure to edit this profile?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Edit</button>
        </div>
      </div>
    </div>
  </div>

</form>