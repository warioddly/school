@extends('layouts.app')

@section('title', 'Show group')

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
                <h4 class="page-title">Show {{ $group->title }}</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <ul class="nav nav-pills bg-nav-pills nav-justified justify-content-center mb-3">
                        <li class="nav-item">
                            <a href="#group" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link rounded-0 active">
                                <i class="uil uil-layer-group font-18"></i>
                                <span class="d-none d-lg-block">Group</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#students" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                <i class="dripicons-user-group font-18"></i>
                                <span class="d-none d-lg-block">Students</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#teachers" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                <i class="dripicons-user font-18"></i>
                                <span class="d-none d-lg-block">Teachers</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <div class="tab-pane show active" id="group">

                            @include('groups.components.group-info')

                            <div id="calendar"></div>

                        </div>

                        <div class="tab-pane" id="students">
                            @include('groups.components.group-students')
                        </div>

                        <div class="tab-pane" id="teachers">
                            @include('groups.components.group-teachers')
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@push('header_scripts')
    <link href="{{ asset("assets/css/vendor/dataTables.bootstrap5.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/vendor/responsive.bootstrap5.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{{ asset("assets/css/vendor/fullcalendar.min.css") }}}" rel="stylesheet" type="text/css" />
@endpush

@push('footer_scripts')

    <script src="{{ asset("assets/js/vendor/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/dataTables.bootstrap5.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/responsive.bootstrap5.min.js") }}"></script>


    <script src="{{ asset("assets/js/vendor/jquery-ui.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/fullcalendar.min.js") }}"></script>

    <script src="{{ asset("assets/js/pages/calendar.js") }}"></script>
    <script src="{{ asset("assets/js/pages/groups.js") }}"></script>

@endpush

