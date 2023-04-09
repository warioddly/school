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

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <a href="javascript:void(0);" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Role</a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="products-datatable">
                                <thead class="table-light">
                                <tr>
                                    <th>Role name</th>
                                    <th style="width: 75px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">121</span>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
