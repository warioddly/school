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
                    <h4 class="page-title">Groups</h4>
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
                                       data-bs-toggle="modal" data-bs-target="#create-group-modal"
                                    ><i class="mdi mdi-plus-circle me-2"></i> Add Group</a>
                                @endcan
                            </div>

                        </div>

                        @if (count($groups))

                            <div class="table-responsive">
                                <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="groups-datatable">

                                    <thead class="table-light">
                                    <tr>
                                        <th>Group</th>
                                        <th>Description</th>
                                        <th>Create Date</th>
                                        <th style="width: 75px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($groups as $group)
                                            <tr>
                                                <td class="table-user">
                                                    <a href="{{ route('groups.show', $group->id) }}" class="text-body fw-semibold">{{ $group->title }}</a>
                                                </td>
                                                <td> {{ \Illuminate\Support\Str::limit($group->description, $limit=30, '...') }} </td>
                                                <td> {{ $group->created_at }} </td>
                                                <td>
{{--                                                    @can(["edit groups"])--}}
                                                        <a class="action-icon"
                                                           data-bs-toggle="modal"
                                                           data-bs-target="#edit-group-modal"
                                                           data-title="{{ $group->title }}"
                                                           href="{{ route('groups.edit', $group->id) }}"
                                                           data-description="{{ $group->description }}"
                                                        >
                                                            <i class="mdi mdi-square-edit-outline"></i>
                                                        </a>
{{--                                                    @endcan--}}
{{--                                                    @can(["delete groups"])--}}
                                                        <a class="action-icon"
                                                            href="{{ route('groups.destroy', $group->id) }}"
                                                            data-bs-toggle="modal"
                                                           data-bs-target="#delete-group-modal"
                                                        > <i class="mdi mdi-delete"></i></a>
{{--                                                    @endcan--}}

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        @else
                            <div class="alert alert-info" role="alert">
                                <i class="mdi mdi-alert-circle-outline me-2"></i> No groups found!
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>

        @include('groups.fragments.create_modal')

        @include('groups.fragments.edit_modal')

        @include('groups.fragments.delete_modal')

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

    <script src="{{ asset("assets/js/pages/groups.js") }}"></script>
@endpush
