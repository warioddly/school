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
                    <h4 class="page-title">Roles</h4>
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
                                @can(["create roles"])
                                    <a href="javascript:void(0);" class="btn btn-danger mb-2"
                                       data-bs-toggle="modal" data-bs-target="#create-role-modal"
                                    ><i class="mdi mdi-plus-circle me-2"></i> Add Role</a>
                                @endcan
                            </div>
                        </div>

                        @if (count($roles) == 0)
                            <div class="alert alert-info" role="alert">
                                <i class="mdi mdi-alert-circle-outline me-2"></i> No roles found!
                            </div>
                        @else
                            <div class="table-responsive">
                                <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="role-datatable">
                                    <thead class="table-light">
                                    <tr>
                                        <th>Role name</th>
                                        <th>User With This Role</th>
                                        <th style="width: 75px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($roles as $role)
                                        <tr>
                                            <td><span class="fw-semibold"> {{ __($role->name) }}</span></td>
                                            <td><span class="fw-semibold"> {{ count($role->users) }}</span></td>
                                            <td>

                                                @can(["edit roles"])
                                                    <a data-role-name="{{ $role->name }}"
                                                       href="{{ route('roles.update', $role->id) }}"
                                                       data-bs-toggle="modal" data-bs-target="#edit-role-modal"
                                                       data-permissions="{{ json_encode($role->permissions()->pluck('id')->toArray()) }}"
                                                       class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                @endcan

                                                @can(["delete roles"])
                                                    <a class="action-icon"
                                                       data-role-name="{{ $role->name }}"
                                                       href="{{ route('roles.destroy', $role->id) }}"
                                                       data-bs-toggle="modal" data-bs-target="#delete-role-modal"
                                                    > <i class="mdi mdi-delete"></i></a>
                                                @endcan

                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>

        @include('roles.fragments.create_modal')

        @include('roles.fragments.edit_modal')

        @include('roles.fragments.delete_modal')


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
    <!-- third party js ends -->

    <script src="{{ asset("assets/js/pages/roles.js") }}"></script>

@endpush
