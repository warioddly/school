@extends('layouts.app')

@section('title', 'Applications')


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
                    <h4 class="page-title">Applications</h4>
                </div>
            </div>
        </div>

        @include('layouts.fragments.alerts')

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    
                        @if (count($applications) > 0)
                            

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
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>App. Sent Date</th>
                                        <th style="width: 75px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($applications as $application)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck{{$application->id}}">
                                                        <label class="form-check-label" for="customCheck{{$application->id}}">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td class="table-user">
                                                    <img src="{{ asset("assets/images/users/avatar-4.jpg") }}" alt="table-user" class="me-2 rounded-circle">
                                                    <a href="javascript:void(0);" class="text-body fw-semibold">{{ $application->fullName }}</a>
                                                </td>
                                                <td> {{ $application->phone }}  </td>
                                                <td> {{ $application->email }} </td>
                                                <td> {{ $application->created_at }} </td>
                                                <td>
                                                    @can(["edit users"])
                                                        <a href="{{ route('applications.update', $application->id) }}" class="action-icon"
                                                        data-bs-toggle="modal" data-bs-target="#accept-modal"
                                                        > <i class="mdi mdi-check text-success"></i></a>
                                                    @endcan
                                                    @can(["delete users"])
                                                        <a class="action-icon"
                                                        href="{{ route('applications.destroy', $application->id) }}"
                                                        data-bs-toggle="modal" data-bs-target="#delete-modal"
                                                        > <i class="mdi mdi-close text-danger"></i></a>
                                                    @endcan

                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>

                        @else
                                
                                <div class="alert alert-info" role="alert">
                                    <i class="mdi mdi-alert-circle-outline me-2"></i> No applications found!
                                </div>

                        @endif


                    </div>
                </div>
            </div>
        </div>

        @include('applications.fragments.accept_modal')

        @include('applications.fragments.delete_modal')

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

    <script src="{{ asset("assets/js/pages/applications.js") }}"></script>
@endpush
