$(document).ready(function () {
    "use strict";
    var t = {
            chart: { type: "line", width: 80, height: 35, sparkline: { enabled: !0 } },
            series: [],
            stroke: { width: 2, curve: "smooth" },
            markers: { size: 0 },
            colors: ["#727cf5"],
            tooltip: {
                fixed: { enabled: !1 },
                x: { show: !1 },
                y: {
                    title: {
                        formatter: function (e) {
                            return "";
                        },
                    },
                },
                marker: { show: !1 },
            },
        },
        r = [];
    $("#products-datatable").DataTable({
        language: {
            paginate: { previous: "<i class='mdi mdi-chevron-left'>", next: "<i class='mdi mdi-chevron-right'>" },
            info: "Showing roles _START_ to _END_ of _TOTAL_",
            lengthMenu: 'Display <select class=\'form-select form-select-sm ms-1 me-1\'><option value="10">10</option><option value="20">20</option><option value="-1">All</option></select> roles',
        },
        pageLength: 10,
        columns: [
            { orderable: 1 },
            { orderable: !1 },
        ],
        select: { style: "multi" },
        order: [[4, "desc"]],
    });
});
