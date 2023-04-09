@if(session('success'))
    <div class="row">
        <div class="col-12">
            <div class="alert alert-success alert-dismissible mb-3 border-0 fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Success - </strong> {{ session('success') }}
            </div>
        </div>
    </div>
@endif

