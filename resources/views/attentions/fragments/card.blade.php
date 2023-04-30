


<div class="col-lg-6 col-xxl-3">
    <!-- project card -->
    <div class="card d-block">
        <div class="card-body">


            <div class="dropdown card-widgets">

                <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="dripicons-dots-3"></i>
                </a>


                <div class="dropdown-menu dropdown-menu-end">
                    
                    <a href="{{ route("attentions.edit", $item->id) }}" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                    
                    <a href="{{ route('attentions.destroy', $item->id) }}" 
                        class="dropdown-item" data-bs-target="#delete-attention-modal" 
                        data-bs-toggle="modal" 
                        ><i class="mdi mdi-delete me-1"></i>Delete</a>

                </div>


            </div>

            
            <h4 class="mt-0">
                <a href="{{ route("attentions.show", $item->id) }}" class="text-title">{{ $item->title }}</a>
            </h4>

            
            <div class="badge bg-success mb-3" style="background-color: {{ $item->color }} !important"> {{ $item->badge }}</div>


            <p class="text-muted font-13 mb-3">{{ Str::substr($item->description, 0, 150) }}...<a href="{{ route("attentions.show", $item->id) }}" class="fw-bold text-muted">view more</a>
            </p>

       
            <p class="mb-1">
                <span class="text-nowrap mb-2 d-inline-block">
                    <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                    <b>741</b> Comments
                </span>
            </p>


        </div>
  
    </div>
</div>