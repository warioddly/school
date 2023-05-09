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

    $("#user-datatable").DataTable({
        language: {
            paginate: { previous: "<i class='mdi mdi-chevron-left'>", next: "<i class='mdi mdi-chevron-right'>" },
            info: "Showing users _START_ to _END_ of _TOTAL_",
            lengthMenu: 'Display <select class=\'form-select form-select-sm ms-1 me-1\'><option value="10">10</option><option value="20">20</option><option value="-1">All</option></select> users',
        },
        pageLength: 10,
        columns: [
            {
                orderable: !1,
                render: function (e, a, l, t) {
                    return "display" === a && (e = '<div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div>'), e;
                },
                checkboxes: { selectRow: !0, selectAllRender: '<div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div>' },
            },
            { orderable: !0 },
            { orderable: !0 },
            { orderable: !0 },
            { orderable: !0 },
            { orderable: !1 },
        ],
        select: { style: "multi" },
        order: [[4, "desc"]],
        drawCallback: function () {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded"), $("#user-datatable_length label").addClass("form-label");
            for (var e = 0; e < r.length; e++)
                try {
                    r[e].destroy();
                } catch (e) {
                    console.log(e);
                }
            (r = []),
                $(".spark-chart").each(function (e) {
                    var a = $(this).data().dataset;
                    t.series = [{ data: a }];
                    var l = new ApexCharts($(this)[0], t);
                    r.push(l), l.render();
                });
        },
    });


    $('#delete-modal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget);
        const form = $(this).find('form');
        const action = button.attr('href');
        form.attr('action', action);
    });


    $('#accept-modal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget);
        console.log(button);
        const form = $(this).find('form');
        const action = button.attr('href');
        form.attr('action', action);
    });


});