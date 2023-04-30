@extends('layouts.app')

@section('title', 'Show Attention')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                        <li class="breadcrumb-item active">Project Details</li>
                    </ol>
                </div>
                
                <h4 class="page-title">Attention</h4>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
         
            <div class="card d-block">
                <div class="card-body">


                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="dripicons-dots-3"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                        
                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                
                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                       
                        </div>
                    </div>
             

                    <h3 class="mt-0"> {{ $attention->title }} </h3>
                    
                    <div class="badge bg-secondary text-light mb-3" style="background-color: {{ $attention->color }} !important">{{ $attention->badge }}</div>


                    <h5>Attention Overview:</h5>

                    
                    <p class="text-muted mb-4">
                        {{ $attention->description }}
                    </p>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>Created Date</h5>
                                <p>{{ date('j F Y', strtotime($attention->createdAt)) }} <small class="text-muted">{{ date('g:i A', strtotime($attention->createdAt)) }}</small></p>
                            </div>
                        </div>
                    </div>


                </div>

            </div> 

            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 mb-3">Comments (258)</h4>

                    <textarea class="form-control form-control-light mb-2" placeholder="Write message" id="example-textarea" rows="3"></textarea>
                    <div class="text-end">
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-link btn-sm text-muted font-18"><i class="dripicons-paperclip"></i></button>
                        </div>
                        <div class="btn-group mb-2 ms-2">
                            <button type="button" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mt-2">
                        <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                        <div class="w-100 overflow-hidden">
                            <h5 class="mt-0">Jeremy Tomlinson</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                            vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                            in faucibus.

                            <div class="d-flex align-items-start mt-3">
                                <a class="pe-3" href="#">
                                    <img src="assets/images/users/avatar-4.jpg" class="avatar-sm rounded-circle" alt="Generic placeholder image">
                                </a>
                                <div class="w-100 overflow-hidden">
                                    <h5 class="mt-0">Kathleen Thomas</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                    felis in faucibus.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-2">
                        <a href="javascript:void(0);" class="text-danger">Load more </a>
                    </div>
                </div> <!-- end card-body-->
            </div>

        </div> 

    </div>

@endsection
