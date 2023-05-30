@extends('layouts.app')

@section('title', 'Graduation')

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
                    <a href="{{ url()->previous() }}"><h4 class="page-title">Back</h4></a>
                </div>
            </div>
        </div>

        @include('layouts.fragments.alerts')

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        @if (count($students))

                            <div class="table-responsive">
                                <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="user-datatable">

                                    <thead class="table-light">
                                    <tr>
                                        <th>User</th>
                                        <th>Appearance</th>
                                        <th>Grade</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th style="width: 75px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($students as $user)
                                        <tr>
                                            <td class="table-user">
                                                <img src="{{ asset("assets/images/users/avatar-4.jpg") }}" alt="table-user" class="me-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body fw-semibold">{{ $user->fullName }}</a>
                                            </td>
                                            <td> {{ $user->email }} </td>
                                            <td> {{ $user->email }} </td>
                                            <td> {{ $user->phone }} </td>
                                            <td> {{ $user->email }} </td>
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
                                <i class="mdi mdi-alert-circle-outline me-2"></i> No users found!
                            </div>
                        @endif



                    </div>
                </div>
            </div>
        </div>


        @include('graduation.fragments.edit_modal')

@endsection


@push('footer_scripts')

    <link href="{{ asset("assets/css/vendor/dataTables.bootstrap5.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/vendor/responsive.bootstrap5.css") }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset("assets/js/vendor/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/dataTables.bootstrap5.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/responsive.bootstrap5.min.js") }}"></script>

    <script src="{{ asset("assets/js/pages/subjects.js") }}"></script>
@endpush
