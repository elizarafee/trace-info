<!-- adding -->

<button type="submit" class='btn btn-secondary justify-content-end shadow-lg' data-toggle="modal"
  data-target="#add-people">Add
    People</button>

<form action="people/create" method="GET">
    <!-- Modal -->
    <div class="modal fade" id="add-people" tabindex="-1" role="dialog"
        aria-labelledby="add-ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add-ModalLabel">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure to add new people?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>