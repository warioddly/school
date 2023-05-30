<div class="col-lg-3 d-grid align-content-between">

    <div>

{{--        <div class="d-grid">--}}
{{--            <button class="btn btn-lg font-16 btn-primary" id="btn-new-event"><i class="mdi mdi-plus-circle-outline"></i> Create New Event</button>--}}
{{--        </div>--}}

        <div id="external-events" class="m-t-20">

            <p class="text-muted mt-0">Drag and drop your event or click in the calendar</p>

            @if (isset($groups))
                @foreach($groups as $item)
                    <div class="rounded border bg-success my-1 p-1">
                        <div class="text-white d-flex justify-content-between" data-class="bg-success">

                            <a href="{{ route('schedule.show', $item->id) }}" class="text-white ">
                                <i class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>{{ $item->title }}
                            </a>

                            <a href="{{ route('schedule.edit', $item->id) }}" class="text-white ">
                                <i class="mdi mdi-book-edit"></i>
                            </a>

                        </div>
                    </div>
                @endforeach
            @endif

        </div>

    </div>

</div>
