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
                    <a href="{{ route('attentions') }}" class="me-2"  data-bs-container="#tooltip-back-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back"><i class="uil-backward"></i></a>
                    <h4 class="page-title">Create Attention</h4>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.fragments.alerts')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route("attentions.store") }}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-12">
    
                                <div class="mb-3">
                                    <label for="projectname" class="form-label">Title</label>
                                    <input type="text" id="projectname" class="form-control" name="title" placeholder="Enter project name">
                                </div>
    
                                <div class="mb-3">
                                    <label for="project-overview" class="form-label">Overview</label>
                                    <textarea class="form-control" id="project-overview" rows="5" name="description" placeholder="Enter some information about attention.." required></textarea>
                                </div>
    
                                <div class="mb-3">
                                    <label for="badges" class="form-label">Badge</label>
                                    <input type="text" id="badges" class="form-control" name="badge" placeholder="Enter badge name">
                                </div>
    
                                <div class="mb-3">
                                    <label for="badge-color" class="form-label">Badge Color</label>
                                    <input class="form-control" id="badge-color" type="color" name="color" value="#727cf5">
                                </div>


                                <button type="submit" class="btn btn-primary">Create</button>
    
                            </div> 
    
                        </div>


                    </form>

                </div> 
            </div>
        </div>
    </div>

@endsection
