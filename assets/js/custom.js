$(document).ready(function () {
  // mega menu handler
  if (window.innerWidth >= 768) {
    var widthFixer = $("header .container").innerWidth();
    $("header .mega-menu").css("width", widthFixer - 96);
  }
  // mega menu handler

  // main slider
  var swiper = new Swiper("#main-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 4500,
      disableOnInteraction: false,
    },
  });
  // main slider

  //   event slider
  if (window.innerWidth >= 1024) {
    var swiper = new Swiper("#event-slider", {
      slidesPerView: 4,
      spaceBetween: 30,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: "#event-slider .swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: "#event-slider .swiper-button-next",
        prevEl: "#event-slider .swiper-button-prev",
      },
    });
  } else if (window.innerWidth < 1024 && window.innerWidth >= 768) {
    var swiper = new Swiper("#event-slider", {
      slidesPerView: 2,
      spaceBetween: 30,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: "#event-slider .swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: "#event-slider .swiper-button-next",
        prevEl: "#event-slider .swiper-button-prev",
      },
    });
  } else if (window.innerWidth < 768) {
    var swiper = new Swiper("#event-slider", {
      slidesPerView: 1,
      spaceBetween: 30,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: "#event-slider .swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: "#event-slider .swiper-button-next",
        prevEl: "#event-slider .swiper-button-prev",
      },
    });
  }
  // event slider

  //   event lightbox handler
  $("#event-slider .lightboxer").click(function (e) {
    e.preventDefault();
    var val = $(this).attr("data-target");
    $("#events #lightbox-cont img").attr("src", val);
    $("#events #lightbox-cont").removeClass("invisible opacity-0");
  });

  $("#events #lightbox-cont").click(function () {
    $("#events #lightbox-cont").addClass("invisible opacity-0");
  });
  // event lightbox handler

  //   faq handler
  $(".faq-item").click(function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(".faq-item p").removeClass("mt-4 max-h-96 overflow-visible");
      $(".faq-item i").removeClass("rotate-180");
    } else {
      $(".faq-item").removeClass("active");
      $(this).addClass("active");
      $(".faq-item p").removeClass("mt-4 max-h-96 overflow-visible");
      $(".faq-item i").removeClass("rotate-180");
      $(this).find("p").addClass("mt-4 max-h-96 overflow-visible");
      $(this).find("i").addClass("rotate-180");
    }
  });
  // faq handler

  //   footerContent handler
  $("#footerHandler").click(function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $("#footerContent").addClass("max-h-32");
      $(this).addClass("absolute h-32");
      $(this).text("مشاهده بیشتر ...");
    } else {
      $(this).addClass("active");
      $("#footerContent").removeClass("max-h-32");
      $(this).removeClass("absolute h-32");
      $(this).text("جمع کردن ...");
    }
  });
  // footerContent handler

  //   search handler
  $("header i.icon-search").click(function () {
    $("#search-cont").removeClass("invisible opacity-0");
  });
  $("#search-cont i.icon-close").click(function () {
    $("#search-cont").addClass("invisible opacity-0");
  });
  // search handler
});
