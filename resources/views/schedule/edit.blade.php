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

                        <div class="col-12">
                            <div class="mt-4 mt-lg-0">
                                <div id="calendar"></div>
                            </div>
                        </div>

                        @if(isset($group))
                            <form action="{{ route('schedule.update', $group->id) }}" class="d-grid mt-3" id="save-form" method="post">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="schedule" value="{{ $group->schedule }}" id="schedule-data">
                                <div class="col">
                                    <button class="btn btn-lg font-16 btn-primary" id="btn-save" type="submit" ><i class="mdi mdi-check"></i> Save</button>
                                </div>
                            </form>

                            <input type="hidden" value="{{ $group->id }}" id="group-id">

                        @endif

                    </div>
                </div>
            </div>

            <div class="modal fade" id="event-modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                <div class="modal-header py-3 px-4 border-bottom-0">
                                    <h5 class="modal-title" id="modal-title">Event</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-4 pb-4 pt-0">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="control-label form-label">Subject</label>
                                                <select class="form-select" name="category" id="event-title" required>
                                                    @foreach($subjects as $item)
                                                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">Please select a valid event category</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Datetime</label>
                                                <input type="text"
                                                       class="form-control date"
                                                       id="event-date"
                                                       required
                                                >
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="control-label form-label">Category</label>
                                                <select class="form-select" name="category" id="event-category" required>
                                                    <option value="bg-danger" selected>Danger</option>
                                                    <option value="bg-success">Success</option>
                                                    <option value="bg-primary">Primary</option>
                                                    <option value="bg-info">Info</option>
                                                    <option value="bg-dark">Dark</option>
                                                    <option value="bg-warning">Warning</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid event category</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-danger" id="btn-delete-event">Delete</button>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
    <script src="{{ asset("assets/js/pages/calendar.edit.js") }}"></script>
@endpush
