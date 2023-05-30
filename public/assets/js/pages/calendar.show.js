!(function (l) {
    "use strict";

    function e() {
        (this.$body = l("body")),
        (this.$calendar = l("#calendar")),
        (this.$scheduleInput = l("#schedule-data")),
        (this.$calendarObj = null),
        (this.$selectedEvent = null),
        (this.$newEventData = null);
    }
        (e.prototype.init = function () {

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
                editable: false,
                droppable: false,
                selectable: false,

            })),
                a.$calendarObj.render();

        }),
        (l.CalendarApp = new e()),
        (l.CalendarApp.Constructor = e);


})(window.jQuery),
    (function () {
        "use strict";
        window.jQuery.CalendarApp.init();
    })();
