@extends('layouts.app')

@section('title', 'Show Material')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tasks</a></li>
                        <li class="breadcrumb-item active">Task Detail</li>
                    </ol>
                </div>
                <h4 class="page-title">Material Detail</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-8 col-xl-7">
            <div class="card d-block">
                <div class="card-body">
                    <div class="dropdown card-widgets">
                        <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='uil uil-ellipsis-h'></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">

                            <a href="{{ route('courses.edit', $course->id ) }}" class="dropdown-item">
                                <i class='uil uil-edit me-1'></i>Edit
                            </a>

                            <div class="dropdown-divider"></div>

                            <a href="{{ route('courses.destroy', $course->id ) }}" class="dropdown-item text-danger">
                                <i class='uil uil-trash-alt me-1'></i>Delete
                            </a>

                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <h3 class="mt-3">{{ $course->title }}</h3>

                    <div class="row">
                        <div class="col-6">
                            <p class="mt-2 mb-1 text-muted fw-bold font-12 text-uppercase">Author</p>
                            <div class="d-flex">
                                <div>
                                    <h5 class="mt-1 font-14">
                                        {{ $course->author_name }}
                                    </h5>
                                </div>
                            </div>

                        </div>

                        <div class="col-6">

                            <p class="mt-2 mb-1 text-muted fw-bold font-12 text-uppercase">Due Date</p>
                            <div class="d-flex">
                                <i class='uil uil-schedule font-18 text-success me-1'></i>
                                <div>
                                    <h5 class="mt-1 font-14">
                                        {{ $course->created_at }}
                                    </h5>
                                </div>
                            </div>

                        </div>
                    </div>


                    <h5 class="mt-3">Description:</h5>

                    <p class="text-muted mb-4">{{ $course->description }}</p>

                    <h5 class="mt-3">Overview:</h5>

                    <p class="text-muted mb-4">{!! $course->content !!}</p>

                </div>

            </div>


        </div>

        <div class="col-xxl-4 col-xl-5">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Attachments</h5>

                    <div class="card my-1 shadow-none border">
                        <div class="p-2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="avatar-sm">
                                        <span class="avatar-title rounded">
                                            .ZIP
                                        </span>
                                    </div>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold">Hyper-admin-design.zip</a>
                                    <p class="mb-0">2.3 MB</p>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                        <i class="dripicons-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-1 shadow-none border">
                        <div class="p-2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img src="assets/images/projects/project-1.jpg" class="avatar-sm rounded" alt="file-image" />
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold">Dashboard-design.jpg</a>
                                    <p class="mb-0">3.25 MB</p>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                        <i class="dripicons-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-0 shadow-none border">
                        <div class="p-2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-secondary text-light rounded">
                                            .MP4
                                        </span>
                                    </div>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold">Admin-bug-report.mp4</a>
                                    <p class="mb-0">7.05 MB</p>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                        <i class="dripicons-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
