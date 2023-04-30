$(document).ready(function () {
    "use strict";

    $('#delete-attention-modal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget);
        const form = $(this).find('form');
        const action = button.attr('href');
        form.attr('action', action);
    });


});
