!(function (l) {
    "use strict";


    l("#user-datatable").DataTable({
        language: {
            paginate: { previous: "<i class='mdi mdi-chevron-left'>", next: "<i class='mdi mdi-chevron-right'>" },
            info: "Showing subjects _START_ to _END_ of _TOTAL_",
            lengthMenu: 'Display <select class=\'form-select form-select-sm ms-1 me-1\'><option value="10">10</option><option value="20">20</option><option value="-1">All</option></select> subjects',
        },
        pageLength: 10,
        columns: [
            { orderable: !0 },
            { orderable: !0 },
            { orderable: !0 },
            { orderable: !1 },
        ],
        select: { style: "multi" },
        order: [[1, "desc"]],
    });


    l('#delete-modal').on('show.bs.modal', function (event) {
        const button = l(event.relatedTarget);
        const form = l(this).find('form');
        const action = button.attr('href');
        form.attr('action', action);
    });


    l('#edit-modal').on('show.bs.modal', function (event) {
        const button = l(event.relatedTarget);
        const description = button.attr('data-description');
        const title = button.attr('data-title');
        const form = l(this).find('form');
        const action =  button.attr('href');
        form.attr('action', action);
        form.find('#edit-title').val(title);
        form.find('#edit-description').val(description);
    });


})(window.jQuery);
