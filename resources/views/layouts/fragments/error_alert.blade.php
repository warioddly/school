@if ($errors->any())

    @foreach ($errors->all() as $error)
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger alert-dismissible mb-3 border-0 fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Error - </strong> {{ $error }}
                </div>
            </div>
        </div>
    @endforeach

@endif
