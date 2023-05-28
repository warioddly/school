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
        (this.$selectedEvent = e.event),
        l("#event-title").val(this.$selectedEvent.title),
        l("#event-category").val(this.$selectedEvent.classNames[0]);
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

        var e = new Date(l.now());
        new FullCalendar.Draggable(document.getElementById("external-events"), {
            itemSelector: ".external-event",
            eventData: function (e) {
                return { title: e.innerText, className: l(e).data("class") };
            },
        });

        const inputData = this.$scheduleInput.val() ?? "{ }";

        var t = JSON.parse(inputData === "" ? "{}" : inputData) ?? [],
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
                a.onEventClick(e);
            },
        })),
            a.$calendarObj.render(),
            a.$btnNewEvent.on("click", function (e) {
                a.onSelect({ date: new Date(), allDay: !0 });
            }),
            a.$formEvent.on("submit", function (e) {
                e.preventDefault();

                var dateRangeParts = l("#event-date").val().split(" - ");
                var startDateString = dateRangeParts[0];
                var endDateString = dateRangeParts[1];

                var currentYear = new Date().getFullYear();

                var startDateTimeString = startDateString + " " + currentYear;
                var endDateTimeString = endDateString + " " + currentYear;

                var startParts = startDateTimeString.split(" ");
                var startDate = startParts[0].split("/");
                var startTime = startParts[1];

                var endParts = endDateTimeString.split(" ");
                var endDate = endParts[0].split("/");
                var endTime = endParts[1];

                var startMonth = parseInt(startDate[1]) - 1; // Adjust month value to be zero-based
                var startDateObject = new Date(currentYear, startMonth, startDate[0]);
                startDateObject.setHours(parseHours(startTime));
                startDateObject.setMinutes(parseMinutes(startTime));

                var endMonth = parseInt(endDate[1]) - 1; // Adjust month value to be zero-based
                var endDateObject = new Date(currentYear, endMonth, endDate[0]);
                endDateObject.setHours(parseHours(endTime));
                endDateObject.setMinutes(parseMinutes(endTime));

                var t, n = a.$formEvent[0];
                n.checkValidity()
                    ? (a.$selectedEvent
                        ? (a.$selectedEvent.setProp("title", l("#event-title").val()), a.$selectedEvent.setProp("classNames", [l("#event-category").val()]))
                        : ((t = {
                            title: l("#event-title").val(),
                            start: startDateObject,
                            end: endDateObject,
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
                        title: event.title,
                        start: event.start,
                        end: event.end,
                        className: event.classNames ?? ["bg-primary"]
                    });
                });

                a.$scheduleInput.val(JSON.stringify(data));
                a.$saveForm.submit();

            });


    }),
    (l.CalendarApp = new e()),
    (l.CalendarApp.Constructor = e);


    function parseHours(timeString) {
        var parts = timeString.split(":");
        var hours = parseInt(parts[0]);
        var meridian = parts[1].split(" ")[1];

        if (meridian === "PM" && hours !== 12) {
            hours += 12;
        } else if (meridian === "AM" && hours === 12) {
            hours = 0;
        }

        return hours;
    }

    function parseMinutes(timeString) {
        return parseInt(timeString.split(":")[1].split(" ")[0]);
    }

})(window.jQuery),
    (function () {
        "use strict";
        window.jQuery.CalendarApp.init();
    })();
