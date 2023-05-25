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


    <div class="row mb-2 justify-content-between">
        <div class="col-sm-4">

{{--            @canany(["create attention"])--}}
                <a href="{{ route('courses.create') }}" class="btn btn-danger rounded-pill mb-3"><i class="mdi mdi-plus"></i>Create Material</a>
{{--            @endcanany--}}

        </div>
        <div class="col-4">
            <form action="{{ route('courses.search') }}" method="post">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="search" id="course-search" value="{{ $search }}">
                    <button class="input-group-text btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>


    </div>


    <div class="row">

        @forelse($materials as $material)
            @include('courses.fragments.card', ['item' => $material])
        @empty
            <h4 class="text-center">Material not found</h4>
        @endforelse

    </div>


    <div>
        {{ $materials->links() }}
    </div>


    @include('attentions.fragments.delete_modal')


@endsection

@push('footer_scripts')
    <script src="{{ asset("assets/js/pages/attention.js") }}"></script>
@endpush
