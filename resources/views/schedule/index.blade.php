@extends('layouts.app')

@section('title', 'Schedule')

@section('content')

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                            <li class="breadcrumb-item active">Calendar</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Schedule</h4>
                </div>
            </div>
        </div>

        @include('layouts.fragments.alerts')

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            @if (!auth()->user()->hasRole('student'))
                                @include('schedule.fragments.sidebar')
                            @endif
                            <div class="col-lg-9">
                                <div class="mt-4 mt-lg-0">
                                    @if(isset($group))
                                        <div id="calendar"></div>
                                    @else
                                        <h4 class="text-center">Select one group</h4>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

@endsection


@push('footer_scripts')
    <link href="{{{ asset("assets/css/vendor/fullcalendar.min.css") }}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset("assets/js/vendor/jquery-ui.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/fullcalendar.min.js") }}"></script>
    <script src="{{ asset("assets/js/pages/calendar.js") }}"></script>
@endpush
