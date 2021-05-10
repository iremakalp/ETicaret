require('./bootstrap');

setTimeout(function () {
    $('.alert').slideUp(500);
}, 5000);

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
