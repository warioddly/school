@extends('layouts.app')

@section('title', 'Users')


@section('content')


        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                            <li class="breadcrumb-item active">Sellers</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Users</h4>
                </div>
            </div>
        </div>

        @include('layouts.fragments.alerts')

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                @can(["create users"])
                                    <a href="javascript:void(0);" class="btn btn-danger mb-2"
                                       data-bs-toggle="modal" data-bs-target="#create-user-modal"
                                    ><i class="mdi mdi-plus-circle me-2"></i> Add User</a>
                                @endcan
                            </div>


                            <div class="col-sm-8">
                                <div class="text-sm-end">
                                    <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                                    <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                </div>
                            </div>
                        </div>

                        @if (count($users))
                            
                            <div class="table-responsive">
                                <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="user-datatable">

                                    <thead class="table-light">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck">
                                                <label class="form-check-label" for="customCheck">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>User</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Create Date</th>
                                        <th style="width: 75px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($users as $user)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck{{$user->id}}">
                                                        <label class="form-check-label" for="customCheck{{$user->id}}">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td class="table-user">
                                                    <img src="{{ asset("assets/images/users/avatar-4.jpg") }}" alt="table-user" class="me-2 rounded-circle">
                                                    <a href="javascript:void(0);" class="text-body fw-semibold">{{ $user->fullName }}</a>
                                                </td>
                                                <td> {{ $user->getRoleNames()->map(fn ($name) => __($name))->implode(', ') }}  </td>
                                                <td> {{ $user->email }} </td>
                                                <td> {{ $user->created_at }} </td>
                                                <td>
                                                    @can(["edit users"])
                                                        <a href="javascript:void(0);" class="action-icon"
                                                        data-bs-toggle="modal" data-bs-target="#edit-user-modal"
                                                        > <i class="mdi mdi-square-edit-outline"></i></a>
                                                    @endcan
                                                    @can(["delete users"])
                                                        <a class="action-icon"
                                                        href="{{ route('users.destroy', $user->id) }}"
                                                        data-bs-toggle="modal" data-bs-target="#delete-user-modal"
                                                        > <i class="mdi mdi-delete"></i></a>
                                                    @endcan

                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>

                        @else
                            <div class="alert alert-info" role="alert">
                                <i class="mdi mdi-alert-circle-outline me-2"></i> No users found!
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>

        @include('users.fragments.create_modal')

        @include('users.fragments.edit_modal')

        @include('users.fragments.delete_modal')

@endsection

@push('header_scripts')
    <link href="{{ asset("assets/css/vendor/dataTables.bootstrap5.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/vendor/responsive.bootstrap5.css") }}" rel="stylesheet" type="text/css" />
@endpush

@push('footer_scripts')

    <!-- third party js -->
    <script src="{{ asset("assets/js/vendor/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/dataTables.bootstrap5.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/responsive.bootstrap5.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/apexcharts.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/dataTables.checkboxes.min.js") }}"></script>
    <!-- third party js ends -->

    <script src="{{ asset("assets/js/pages/users.js") }}"></script>
@endpush
