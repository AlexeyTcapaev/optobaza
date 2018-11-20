require('./bootstrap');
$(document).ready(function () {
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    $('select').formSelect();

});
