import './bootstrap';
import 'bootstrap/dist/js/bootstrap.js';

$(function () {
    $(document).on('click', '#logout-btn', function (e) {
        e.preventDefault();
        $('#logout-form').trigger('submit');
    });
});