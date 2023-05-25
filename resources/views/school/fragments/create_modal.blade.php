<div class="modal fade" id="create-user-modal"
     data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <form action="{{ route("users.store") }}" method="POST" >
                @csrf

                <div class="modal-body">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xxl-3 g-1 g-sm-3">

                        <div class="mb-3">
                            <label for="surname" class="form-label">Surename</label>
                            <input class="form-control" type="text" id="surname" name="surname" required placeholder="Input surname">
                        </div>


                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" type="text" id="name" name="name" required placeholder="Name title">
                        </div>


                        <div class="mb-3">
                            <label for="patronymic" class="form-label">Patronymic</label>
                            <input class="form-control" type="text" id="patronymic" name="patronymic" placeholder="Input patronymic">
                        </div>


                    </div>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xxl-3 g-1 g-sm-3">

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="email" id="email" name="email" required placeholder="email: example@email.com">
                        </div>


                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input class="form-control" type="text" id="phone" name="phone" required placeholder="Phone number">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" id="password" name="password" required placeholder="Input password">
                        </div>

                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ __($role->name) }}</option>
                            @endforeach
                        </select>
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
