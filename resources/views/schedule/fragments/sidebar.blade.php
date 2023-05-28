<div class="col-lg-3 d-grid align-content-between">

    <div>

{{--        <div class="d-grid">--}}
{{--            <button class="btn btn-lg font-16 btn-primary" id="btn-new-event"><i class="mdi mdi-plus-circle-outline"></i> Create New Event</button>--}}
{{--        </div>--}}

        <div id="external-events" class="m-t-20">

            <p class="text-muted mt-4">Drag and drop your event or click in the calendar</p>

            @if (isset($groups))
                @foreach($groups as $item)
                    <div class="rounded border bg-success text-white my-1 p-1">
                        <a href="{{ route('schedule.show', $item->id) }}" class="text-white" data-class="bg-success">
                            <i class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>{{ $item->title }}
                        </a>
                    </div>
                @endforeach
            @endif

        </div>

    </div>

    @if(isset($group))
        <form action="{{ route('schedule.update', $group->id) }}" class="d-grid" id="save-form" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="schedule" value="{{ $group->schedule }}" id="schedule-data">
            <button class="btn btn-lg font-16 btn-primary" id="btn-save" type="submit" ><i class="mdi mdi-check"></i> Save</button>
        </form>
    @endif

</div>
