function navto(id) {
    $('html, body').animate({
        scrollTop: $("#"+id).offset().top
    }, 0);
};