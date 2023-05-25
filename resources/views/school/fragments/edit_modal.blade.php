<div class="modal fade" id="edit-modal"
     data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <form action="#" method="POST" >
                <div class="modal-body">

                    @csrf
                    @method('POST   ')

                    <div class="mb-3">
                        <label for="edit-role" class="form-label">Group</label>
                        <select class="form-select" id="edit-role">
                            @foreach($groups as $group)
                                <option value="{{ $group->id }}">{{ __($group->title) }}</option>
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
