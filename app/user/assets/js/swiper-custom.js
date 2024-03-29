"use strict";
$(document).ready(function () {
  var swiper = new Swiper(".swiper-container", {
    pagination: ".swiper-pagination",
    slidesPerView: 5,
    paginationClickable: true,
    spaceBetween: 20,
    loop: true,
    breakpoints: {
      576: { slidesPerView: 1 },
      992: { slidesPerView: 2 },
      1200: { slidesPerView: 3 },
    },
  });
});
