@extends('layouts.app')

@section('title', 'Courses Materials')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                        <li class="breadcrumb-item active">Projects List</li>
                    </ol>
                </div>
                <h4 class="page-title">Materials</h4>
            </div>
        </div>
    </div>


    @include('layouts.fragments.alerts')


    <div class="row mb-2">
        <div class="col-sm-4">

{{--            @canany(["create attention"])--}}
                <a href="{{ route('courses.create') }}" class="btn btn-danger rounded-pill mb-3"><i class="mdi mdi-plus"></i>Create Material</a>
{{--            @endcanany--}}

        </div>

        {{-- <div class="col-sm-8">
            <div class="text-sm-end">
                <div class="btn-group mb-3">
                    <button type="button" class="btn btn-primary">All</button>
                </div>
                <div class="btn-group mb-3 ms-1">
                    <button type="button" class="btn btn-light">Ongoing</button>
                    <button type="button" class="btn btn-light">Finished</button>
                </div>
                <div class="btn-group mb-3 ms-2 d-none d-sm-inline-block">
                    <button type="button" class="btn btn-secondary"><i class="dripicons-view-apps"></i></button>
                </div>
                <div class="btn-group mb-3 d-none d-sm-inline-block">
                    <button type="button" class="btn btn-link text-muted"><i class="dripicons-checklist"></i></button>
                </div>
            </div>
        </div> --}}

    </div>

    
    <div class="row">

        @foreach ($materials as $material)

            @include('courses.materials.fragments.card', ['item' => $material])
            
        @endforeach

    </div>


    @include('attentions.fragments.delete_modal')


@endsection

@push('footer_scripts')
    <script src="{{ asset("assets/js/pages/attention.js") }}"></script>
@endpush