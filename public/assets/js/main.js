// Services Carousel JS
$(".service-carol").owlCarousel({
    loop: true,
    margin: 10,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 5,
      },
    },
  });

  // Logo Carousel JS

  $(".logo-carol").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 7,
      },
    },
  });

  // image gallery
  $(function () {
    // Lightbox function
    var lightbox = function () {
      var src = $(".active").attr("src");
      $("#lightbox img").attr("src", src);
    };

    // Image is clicked
    $("img").click(function () {
      $("#lightbox").css("display", "flex");
      $(this).addClass("active");
      lightbox();
    });

    // Close button clicked
    $(".close").click(function () {
      $("img").removeClass("active");
      $("#lightbox").hide();
    });

    // Next button clicked
    $(".next").click(function () {
      if (
        $(".active").parent(".gallery").children("img:last").hasClass("active")
      ) {
        $(".active")
          .removeClass()
          .parent(".gallery")
          .children("img:first")
          .addClass("active");
        lightbox();
      } else {
        $(".active").removeClass().next("img").addClass("active");
        lightbox();
      }
    });

    // Prev button clicked
    $(".prev").click(function () {
      if (
        $(".active").parent(".gallery").children("img:first").hasClass("active")
      ) {
        $(".active")
          .removeClass()
          .parent(".gallery")
          .children("img:last")
          .addClass("active");
        lightbox();
      } else {
        $(".active").removeClass().prev("img").addClass("active");
        lightbox();
      }
    });
  });
  // image gallery End --------------------------------

  var firstTabEl = document.querySelector("#myTab li:last-child a");
  var firstTab = new bootstrap.Tab(firstTabEl);
  firstTab.show();
