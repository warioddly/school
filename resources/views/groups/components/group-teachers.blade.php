@if (count($teachers))

    <div class="table-responsive">
        <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="group-teachers">

            <thead class="table-light">
            <tr>
                <th>Teacher</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Create Date</th>
                <th style="width: 75px;">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($teachers as $user)
                <tr>
                    <td class="table-user">
                        <img src="{{ asset("assets/images/users/avatar-4.jpg") }}" alt="table-user" class="me-2 rounded-circle">
                        <a href="javascript:void(0);" class="text-body fw-semibold">{{ $user->fullName }}</a>
                    </td>
                    <td><a href="tel: {{ $user->phone }}">{{ $user->phone }}</a> </td>
                    <td><a href="mailto: {{ $user->email }}">{{ $user->email }}</a> </td>
                    <td> {{ $user->created_at }} </td>
                    <td>
                        @can(["edit users"])
                            <a href="javascript:void(0);" class="action-icon"
                               data-bs-toggle="modal" data-bs-target="#edit-user-modal"
                            > <i class="mdi mdi-square-edit-outline"></i></a>
                        @endcan
                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>

@else
    <div class="alert alert-info" role="alert">
        <i class="mdi mdi-alert-circle-outline me-2"></i> No students found!
    </div>
@endif
