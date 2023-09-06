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

  //   mobile menu handler
  $("#hamburger").click(function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $("#mobile-menu").addClass("invisible -right-full opacity-0");
      $("#mobile-menu").removeClass("visible right-0 opacity-100");
      $(this).find(".dash1").css("transform", "translate(0, 0) rotate(0)");
      $(this).find(".dash3").css("transform", "translate(0, 0) rotate(0)");
      $(this).find(".dash2").css("opacity", "1");
    } else {
      $(this).addClass("active");
      $("#mobile-menu").removeClass("invisible -right-full opacity-0");
      $("#mobile-menu").addClass("visible right-0 opacity-100");
      $(this)
        .find(".dash1")
        .css("transform", "translate(0, 5px) rotate(-45deg)");
      $(this)
        .find(".dash3")
        .css("transform", "translate(0, -11px) rotate(45deg)");
      $(this).find(".dash2").css("opacity", "0");
    }
  });

  $("#mobile-menu li.menu-item-has-children").click(function (e) {
    e.preventDefault();
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this).find("ul.sub-menu").addClass("invisible max-h-0 opacity-0");
      $(this).find("ul.sub-menu").removeClass("mt-5 max-h-[700px]");
    } else {
      $(this).addClass("active");
      $(this).find("ul.sub-menu").removeClass("invisible max-h-0 opacity-0");
      $(this).find("ul.sub-menu").addClass("mt-5 max-h-[700px]");
    }
  });
  //   mobile menu handler

  // format numbers in front end
  $(".format-number").each(function () {
    var num = parseFloat($(this).text());
    var formatted = num.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    $(this).text(formatted);
  });
  // format numbers in front end

  // single product price handler
  var firstPrice = parseInt($("#product-price").text().replace(/,/g, ""));
  $("#calc #increase").click(function () {
    var qtyVal = parseInt($("#calc #qty").val());
    if (qtyVal < 10) {
      $("#calc #qty").val(qtyVal + 1);
      var price = parseInt($("#product-price").text().replace(/,/g, ""));
      $("#product-price").text(price + firstPrice);
      var newPrice = parseFloat($("#product-price").text());
      var newFormatted = newPrice
        .toFixed(0)
        .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      $("#product-price").text(newFormatted);
    }
  });
  $("#calc #decrease").click(function () {
    var qtyVal = parseInt($("#calc #qty").val());
    if (qtyVal <= 10 && qtyVal > 1) {
      $("#calc #qty").val(qtyVal - 1);
      var price = parseInt($("#product-price").text().replace(/,/g, ""));
      $("#product-price").text(price - firstPrice);
      var newPrice = parseFloat($("#product-price").text());
      var newFormatted = newPrice
        .toFixed(0)
        .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      $("#product-price").text(newFormatted);
    }
  });
  // single product price handler

  // buy button modal handler
  $("#order-submit").click(function () {
    $("#buy-cont").removeClass("opacity-0 invisible");
  });

  $("#buy-cont #closer").click(function () {
    $("#buy-cont").addClass("opacity-0 invisible");
  });
  // buy button modal handler

  // buy phone number handler
  $("#buy-cont .phone-li").click(function () {
    if ($(this).hasClass("active")) {
    } else {
      $("#buy-cont .phone-li").removeClass("active");
      $(this).addClass("active");
      var phone = $(this).attr("data-target");
      $("#buy-cont #buy-phone").text("021-" + phone);
      $("#buy-cont #buy-phone").attr("href", "tel:021" + phone);
    }
  });
  // buy phone number handler

  // shortlink handler
  $("#shortlink").click(function () {
    var dummy = document.createElement("input"),
      text = window.location.href;
    document.body.appendChild(dummy);
    dummy.value = text;
    dummy.select();
    document.execCommand("copy");
    document.body.removeChild(dummy);
    $(this).find("span").text("کپی شد");
  });
  // shortlink handler

  //   related products slider
  if (window.innerWidth >= 1024) {
    var swiper = new Swiper("#related-slider", {
      slidesPerView: 4,
      spaceBetween: 30,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: "#related-slider .swiper-button-next",
        prevEl: "#related-slider .swiper-button-prev",
      },
    });
  } else if (window.innerWidth < 1024 && window.innerWidth >= 768) {
    var swiper = new Swiper("#related-slider", {
      slidesPerView: 2,
      spaceBetween: 30,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: "#related-slider .swiper-button-next",
        prevEl: "#related-slider .swiper-button-prev",
      },
    });
  } else if (window.innerWidth < 768) {
    var swiper = new Swiper("#related-slider", {
      slidesPerView: 1,
      spaceBetween: 30,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: "#related-slider .swiper-button-next",
        prevEl: "#related-slider .swiper-button-prev",
      },
    });
  }
  // related products slider
});
