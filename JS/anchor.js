function scrollToElement(element) {
    $('html, body').animate({ scrollTop: $(element).offset().top - 48}, 500);
    $('#headerMobile').css('left','-5000px')
}