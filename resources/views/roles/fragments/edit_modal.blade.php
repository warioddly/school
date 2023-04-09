<div class="modal fade" id="edit-role-modal"
     data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <form action="#" method="POST" >
                <div class="modal-body">

                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                        <label for="edit-role" class="form-label">Role title</label>
                        <input class="form-control" type="text" id="edit-role" name="name" required placeholder="Input role title...">
                    </div>

                    <label for="permissions-edit" class="form-label">Permissions</label>
                    <select class="select2 form-control select2-multiple"
                            id="permissions-edit"
                            data-toggle="select2" multiple="multiple"
                            data-placeholder="Choose permissions..."
                            name="permissions[]"
                            required
                    >
                        @foreach($permissions as $permission)
                            <option value="{{ $permission->id }}">{{ __($permission->name) }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>

        </div>
    </div>
</div>
