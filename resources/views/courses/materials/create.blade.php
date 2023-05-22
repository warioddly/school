@extends('layouts.app')

@section('title', 'Create Attention')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="page-title-box" >
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                        <li class="breadcrumb-item active">Create Project</li>
                    </ol>
                </div>
                <div class="d-flex align-items-center"  id="tooltip-back-container">
                    <a href="{{ url()->previous() }}" class="me-2"  data-bs-container="#tooltip-back-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back"><i class="uil-backward"></i></a>
                    <h4 class="page-title">Create Material</h4>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.fragments.alerts')

           
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="row">

                            <div class="col-xl-8">

                                <input type="hidden" name="description" id="hidden-desciprtion">
                                <input type="hidden" name="files[]" id='hidden-files'>
    
                                <div class="mb-3">
                                    <label for="projectname" class="form-label">Name</label>
                                    <input type="text" id="projectname" class="form-control" name="title" placeholder="Enter project name">
                                </div>
    
                                <div class="mb-3">
                                    <label for="project-overview" class="form-label">Overview</label>
                                    <div id="snow-editor" style="height: 300px;"></div>
                                </div>
    
                                <div class="mb-0">
                                    <label for="project-overview" class="form-label">Tags</label>
                                    
                                    <select class="form-control select2" data-toggle="select2" name="tag_id">
                                        @foreach ($tags as $key => $tag)
                                            @if (0 == $key) <option value="{{ $tag->id }}" selected>{{ $tag->title }}</option>
                                            @else <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                                            @endif
                                        @endforeach
                                    </select>
    
                                </div>
    
                            </div>
    
    
                            {{-- <div class="col-xl-4">
    
                                <div class="mb-3 mt-3 mt-xl-0">
    
                                    <label for="projectname" class="mb-0">Materials</label>
    
                                    
                                    <div action="/document/upload" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                        data-upload-preview-template="#uploadPreviewTemplate">
                                        <div class="fallback">
                                            <input name="file" type="file" />
                                        </div>
    
                                        <div class="dz-message needsclick">
                                            <i class="h3 text-muted dripicons-cloud-upload"></i>
                                            <h4>Drop files here or click to upload.</h4>
                                        </div>
                                    </div>
    
    
                                    <div class="dropzone-previews mt-3" id="file-previews"></div>
    
    
                                    <div class="d-none" id="uploadPreviewTemplate">
                                        <div class="card mt-1 mb-0 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                                    </div>
                                                    <div class="col ps-0">
                                                        <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                                        <p class="mb-0" data-dz-size></p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                            <i class="dripicons-cross"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
    
                                    <div id="document_attachments">
    
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
    
                            </div>  --}}

                        </div>


                        <div class="row mt-3">
                               <div class="col-3">
                                    <a href="{{ url()->previous() }}" class="btn btn-secondary e-2" >Cancel</a>
                                    <button type="submit" class="btn btn-primary">Create</button>
                               </div>
                        </div>

                    </form>

                </div> 
            </div> 
        </div>
    </div>


@endsection


@push('header_scripts')
    <link href="{{ asset('assets/css/vendor/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/vendor/quill.core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/vendor/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/vendor/quill.snow.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/js/vendor/quill.min.js') }}"></script>
@endpush

@push('footer_scripts')
    <script src="{{ asset('assets/js/pages/materials.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/dropzone.min.js') }}"></script>
@endpush
