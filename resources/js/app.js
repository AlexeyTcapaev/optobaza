require('./bootstrap');
$.trumbowyg.svgPath = '/svg/wyswig-icons.svg';
$(document).ready(function () {
    $('.textarea-wysiwyg').trumbowyg();
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    $('select').formSelect();

});
