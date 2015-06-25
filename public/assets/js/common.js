$(function () {
    $('tr[data-href]').click(function (e) {
        if (!$(e.target).is('a')) {
            window.location = $(e.target).closest('tr').attr('data-href');
        }
    });
});