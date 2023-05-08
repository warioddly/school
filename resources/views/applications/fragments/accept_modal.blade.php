<div class="modal fade" id="accept-modal"
     data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Accept application</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <div class="modal-body">
                <h5>{{ __('Are you sure you want to accept this application?') }}</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form id="accept-form" action="" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-primary">Accept</button>
                </form>
            </div>

        </div>
    </div>
</div>
