


<div class="col-lg-6 col-xxl-3">
    <!-- project card -->
    <div class="card d-block">
        <div class="card-body">


            <div class="dropdown card-widgets">

                <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="dripicons-dots-3"></i>
                </a>


                <div class="dropdown-menu dropdown-menu-end">

                    <a href="{{ route("courses.edit", $item->id) }}" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>

                    <a href="{{ route('courses.destroy', $item->id) }}"
                        class="dropdown-item" data-bs-target="#delete-attention-modal"
                        data-bs-toggle="modal"
                        ><i class="mdi mdi-delete me-1"></i>Delete</a>

                </div>


            </div>


            <h4 class="mt-0">
                <a href="{{ route("courses.show", $item->id) }}" class="text-title">{{ $item->title }}</a>
            </h4>


            <div class="badge bg-success mb-3"> {{ $item->tag->title }}</div>


            <p class="text-muted font-13 mb-3">
                {{ $item->description }}...
                <a href="{{ route("courses.show", $item->id) }}" class="fw-bold text-muted">view more</a>
            </p>


            <p class="mb-1">
                <span class="text-nowrap mb-2 d-inline-block">
                    <i class="mdi mdi-eye text-muted"></i>
                    <b>{{ $item->views }}</b> Views
                </span>
            </p>


        </div>
    </div>
</div>
