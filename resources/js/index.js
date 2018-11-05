const $ = require('jquery');
require("materialize-css");
$(document).ready(function () {
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
      });
});
