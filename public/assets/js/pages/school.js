$(document).ready(function () {
    "use strict";

    $("#groups-datatable").DataTable({
        language: {
            paginate: { previous: "<i class='mdi mdi-chevron-left'>", next: "<i class='mdi mdi-chevron-right'>" },
            info: "Showing users _START_ to _END_ of _TOTAL_",
            lengthMenu: 'Display <select class=\'form-select form-select-sm ms-1 me-1\'><option value="10">10</option><option value="20">20</option><option value="-1">All</option></select> users',
        },
        pageLength: 10,
        columns: [
            { orderable: !0 },
            { orderable: !0 },
            { orderable: !1 },
        ],
        select: { style: "multi" },
        order: [[1, "desc"]],
    });


    $('#edit-modal').on('show.bs.modal', function (event) {

        const button = $(event.relatedTarget);
        const form = $(this).find('form');
        const groups = JSON.parse(button.attr('data-groups')).map(e => e.group_id);

        form.attr('action', button.attr('href'));

        $('#edit-role').val(groups).trigger("change");

    });

});
