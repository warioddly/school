<div class="modal fade" id="edit-modal"
     data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Grade student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <form action="#" method="POST" >
                <div class="modal-body">
                    @csrf
                    @method('PATCH')

                    <input type="hidden" name="teacher_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="student_id" value="" id="student_id">
                    <input type="hidden" name="subject_id" value="{{ $subject->id }}">

                    <div class="mb-2">
                        <label for="grade" class="form-label">Grade</label>
                        <select name="grade" id="grade">
                            @foreach(['2', '3', '4', '5'] as $grade)
                                <option value="{{ $grade }}">{{ $grade }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="comment" class="form-label">Comment</label>
                        <input class="form-control" type="text" id="comment" name="comment" required placeholder="Input comment...">
                    </div>

                    <div class="mb-2">
                        <label for="edit-description" class="form-label">Description</label>
                        <input class="form-control" type="text" id="edit-description" name="description" required placeholder="Input description...">
                    </div>

                    <div class="mb-2">
                        <label for="appearance" class="form-label">Appearance</label>
                        <input class="form-check-input" type="checkbox" id="appearance" name="appearance" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>

        </div>
    </div>
</div>
