<div class="modal fade" id="create-role-modal"
     data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <form action="{{ route("roles.store") }}" method="POST" >
                <div class="modal-body">

                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Role title</label>
                        <input class="form-control" type="text" id="role" name="name" required placeholder="Input role title...">
                    </div>

                    <label for="permissions" class="form-label">Permissions</label>
                    <select class="select2 form-control select2-multiple"
                            id="permissions"
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
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>

        </div>
    </div>
</div>
