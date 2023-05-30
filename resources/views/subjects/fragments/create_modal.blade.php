<div class="modal fade" id="create-modal"
     data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create tags</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <form action="{{ route("subjects.store") }}" method="POST" >
                @csrf

                <div class="modal-body">

                    <div class="row g-sm-3">

                        <div class="mb-2">
                            <label for="name" class="form-label">Title</label>
                            <input class="form-control" type="text" id="title" name="name" required placeholder="Enter title">
                        </div>

                        <div class="mb-2">
                            <label for="description" class="form-label">Description</label>
                            <input class="form-control" type="text" id="description" name="description" required placeholder="Enter description">
                        </div>

                        <div class="mb-2">
                            <label for="teacher" class="form-label">Teacher</label>
                            <select name="teacher_id" id="teacher" class="form-select">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
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
