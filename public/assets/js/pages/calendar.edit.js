!(function (l) {
    "use strict";

    function e() {
        (this.$body = l("body")),
        (this.$modal = new bootstrap.Modal(document.getElementById("event-modal"), { backdrop: "static" })),
        (this.$calendar = l("#calendar")),
        (this.$formEvent = l("#form-event")),
        (this.$btnNewEvent = l("#btn-new-event")),
        (this.$btnDeleteEvent = l("#btn-delete-event")),
        (this.$btnSave = l("#btn-save")),
        (this.$saveForm = l("#save-form")),
        (this.$scheduleInput = l("#schedule-data")),
        (this.$modalTitle = l("#modal-title")),
        (this.$calendarObj = null),
        (this.$selectedEvent = null),
        (this.$newEventData = null);
    }
    (e.prototype.onEventClick = function (e) {
        this.$formEvent[0].reset(),
        this.$formEvent.removeClass("was-validated"),
        (this.$newEventData = null),
        this.$btnDeleteEvent.show(),
        this.$modalTitle.text("Edit Event"),
        this.$modal.show(),
        (this.$selectedEvent = e.event);
        // l("#event-title").val(this.$selectedEvent.title),
        // l("#event-category").val(this.$selectedEvent.classNames[0]);
    }),
    (e.prototype.onSelect = function (e) {
        this.$formEvent[0].reset(),
        this.$formEvent.removeClass("was-validated"),
        (this.$selectedEvent = null),
        (this.$newEventData = e),
        this.$btnDeleteEvent.hide(),
        this.$modalTitle.text("Add New Event"),
        this.$modal.show(),
        this.$calendarObj.unselect();
    }),
    (e.prototype.init = function () {

        const inputData = this.$scheduleInput.val() ?? "{ }";

        const t = JSON.parse(inputData === "" ? "{}" : inputData) ?? [],
            a = this;

        (a.$calendarObj = new FullCalendar.Calendar(a.$calendar[0], {
        slotDuration: "00:15:00",
        slotMinTime: "08:00:00",
        slotMaxTime: "19:00:00",
        themeSystem: "bootstrap",
        bootstrapFontAwesome: !1,
        buttonText: { today: "Today", month: "Month", week: "Week", day: "Day", list: "List", prev: "Prev", next: "Next" },
        initialView: "dayGridMonth",
        handleWindowResize: !0,
        height: l(window).height() - 200,
        headerToolbar: { left: "prev,next today", center: "title", right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth" },
        initialEvents: t,
        editable: !0,
        droppable: !0,
        selectable: !0,
        dateClick: function (e) {
            a.onSelect(e);
        },
        eventClick: function (e) {
            e.jsEvent.preventDefault();
            a.onEventClick(e);
        },
    })),
        a.$calendarObj.render(),
        a.$formEvent.on("submit", function (e) {
            e.preventDefault();

            const parts = l("#event-date").val().split(' ');

            const dateParts = parts[0].split('/');
            const day = dateParts[0];
            const month = dateParts[1];

            const reformattedDateTimeString = month + '/' + day + '/' +  new Date().getFullYear() + ' ' + parts[1];

            const startTime = new Date(reformattedDateTimeString);
            const endTime = new Date(reformattedDateTimeString);

            endTime.setMinutes(endTime.getMinutes() + 60);

            var t, n = a.$formEvent[0];

            n.checkValidity()
                ? (a.$selectedEvent
                    ? (a.$selectedEvent.setProp(
                        "title", l("#event-title option:selected").text()),
                            a.$selectedEvent.setStart(startTime),
                            a.$selectedEvent.setEnd(endTime),
                            a.$selectedEvent.setProp("id", l("#event-title").val()),
                            a.$selectedEvent.setProp("classNames", [l("#event-category").val()]))
                    : ((t = {
                        id: l("#event-title").val(),
                        title: l("#event-title option:selected").text(),
                        start: startTime,
                        end: endTime,
                        className: l("#event-category").val()
                    }), a.$calendarObj.addEvent(t)),
                    a.$modal.hide())
                : (e.stopPropagation(), n.classList.add("was-validated"));

        }),
        l(a.$btnDeleteEvent.on("click", function (e) {
                a.$selectedEvent && (a.$selectedEvent.remove(), (a.$selectedEvent = null), a.$modal.hide());
            }));
        a.$btnSave.on('click', function (e) {
            e.preventDefault();

            let events = a.$calendarObj.getEvents(), data = [];

            events.forEach(function(event) {
                data.push({
                    groupId: l('#group-id').val(),
                    id: event.id,
                    title: event.title,
                    start: event.start,
                    end: event.end,
                    url: `/dashboard/subjects/show/${l('#group-id').val()}/${event.id}/${event.start}`,
                    className: event.classNames ?? ["bg-primary"]
                });
            });

            a.$scheduleInput.val(JSON.stringify(data));
            a.$saveForm.submit();

        });

    }),
    (l.CalendarApp = new e()),
    (l.CalendarApp.Constructor = e);

    l('#event-date').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        timePicker24Hour: true,
        locale: {
            format: 'DD/MM hh:mm A'
        },
        singleDatePicker: true
    });


})(window.jQuery),
(function () {
    "use strict";
    window.jQuery.CalendarApp.init();
})();
