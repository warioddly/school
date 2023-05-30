@extends('layouts.app')

@section('title', 'Subjects')

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
                    <h4 class="page-title">Subjects</h4>
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
                                       data-bs-toggle="modal" data-bs-target="#create-modal"
                                    ><i class="mdi mdi-plus-circle me-2"></i> Add Subject</a>
                                @endcan
                            </div>

                        </div>

                        @if (count($subjects))

                            <div class="table-responsive">
                                <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="user-datatable">

                                    <thead class="table-light">
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Create Date</th>
                                        <th style="width: 75px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($subjects as $subject)
                                            <tr>
                                                <td class="table-user">
                                                    <a href="javascript:void(0);" class="text-body fw-semibold">{{ __($subject->name) }}</a>
                                                </td>
                                                <td> {{ $subject->description }} </td>
                                                <td> {{ $subject->created_at }} </td>
                                                <td>
                                                    {{-- @can(["edit tags"]) --}}
                                                        <a class="action-icon"
                                                        data-bs-toggle="modal" data-bs-target="#edit-modal"
                                                        data-title="{{ $subject->name }}"
                                                        data-description="{{ $subject->description }}"
                                                        href="{{ route('subjects.update', $subject->id) }}"
                                                        > <i class="mdi mdi-square-edit-outline"></i></a>
                                                    {{-- @endcan --}}
                                                    {{-- @can(["delete tags"]) --}}
                                                        <a class="action-icon"
                                                        href="{{ route('subjects.destroy', $subject->id) }}"
                                                        data-bs-toggle="modal" data-bs-target="#delete-modal"
                                                        > <i class="mdi mdi-delete"></i></a>
                                                    {{-- @endcan --}}

                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>

                        @else
                            <div class="alert alert-info" role="alert">
                                <i class="mdi mdi-alert-circle-outline me-2"></i> No subject found!
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>


        @include('subjects.fragments.create_modal')

        @include('subjects.fragments.edit_modal')

        @include('subjects.fragments.delete_modal')

@endsection

@push('header_scripts')
    <link href="{{ asset("assets/css/vendor/dataTables.bootstrap5.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/vendor/responsive.bootstrap5.css") }}" rel="stylesheet" type="text/css" />
@endpush

@push('footer_scripts')

    <script src="{{ asset("assets/js/vendor/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/dataTables.bootstrap5.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/responsive.bootstrap5.min.js") }}"></script>

    <script src="{{ asset("assets/js/pages/subjects.js") }}"></script>
@endpush
