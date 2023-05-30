<div class="modal fade" id="edit-modal"
     data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit tag</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <form action="#" method="POST" >
                <div class="modal-body">
                    @csrf
                    @method('PATCH')

                    <div class="mb-2">
                        <label for="edit-title" class="form-label">Title</label>
                        <input class="form-control" type="text" id="edit-title" name="name" required placeholder="Input title...">
                    </div>

                    <div class="mb-2">
                        <label for="edit-description" class="form-label">Description</label>
                        <input class="form-control" type="text" id="edit-description" name="description" required placeholder="Input description...">
                    </div>

                    <div class="mb-2">
                        <label for="edit-teacher" class="form-label">Teacher</label>
                        <select name="teacher_id" id="edit-teacher" class="form-select">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>

        </div>
    </div>
</div>
