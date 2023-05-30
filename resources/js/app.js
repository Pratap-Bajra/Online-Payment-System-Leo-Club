import './bootstrap';

setTimeout(function() {
    $('.alert').slideUp();
}, 3000);

$(document).on('click', '.delete-banner', function(e) {
    e.preventDefault();

    let clicked = confirm('Are You Sure Want To Delete Banner !');

    if (clicked) {
        $(this).parent().find('form').submit();
    }
});

$(document).on('click', '.delete-news', function(e) {
    e.preventDefault();

    let clicked = confirm('Are You Sure Want To Delete News !');

    if (clicked) {
        $(this).parent().find('form').submit();
    }
});

$(document).on('click', '.delete-testimonial', function(e) {
    e.preventDefault();

    let clicked = confirm('Are You Sure Want To Delete Testimonial !');

    if (clicked) {
        $(this).parent().find('form').submit();
    }
});

$(document).on('click', '.delete-member', function(e) {
    e.preventDefault();

    let clicked = confirm('Are You Sure Want To Delete Member !');

    if (clicked) {
        $(this).parent().find('form').submit();
    }
});

$(document).on('click', '.delete-project', function(e) {
    e.preventDefault();

    let clicked = confirm('Are You Sure Want To Delete Project !');

    if (clicked) {
        $(this).parent().find('form').submit();
    }
});

$(document).on('click', '.delete-user-member', function(e) {
    e.preventDefault();

    let clicked = confirm('Are You Sure Want To Delete Member !');

    if (clicked) {
        $(this).parent().find('form').submit();
    }
});