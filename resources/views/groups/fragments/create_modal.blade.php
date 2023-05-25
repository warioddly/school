<div class="modal fade" id="create-group-modal"
     data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create group</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <form action="{{ route("groups.store") }}" method="POST" >
                @csrf

                <div class="modal-body">

                    <div class="row row-cols-12">

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input class="form-control" type="text" id="title" name="title" required placeholder="Input title">
                        </div>


                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input class="form-control" type="text" id="description" name="description" required placeholder="Input description">
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>

        </div>
    </div>
</div>
