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

// price range End --------------------------------
  const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  progress = document.querySelector(".slider .progress");

let priceGap = 1000;

rangeInput.forEach(input => {
  input.addEventListener("input", e => {
      let minVal = parseInt(rangeInput[0].value),
          maxVal = parseInt(rangeInput[1].value);

      if (maxVal - minVal < priceGap) {
          if (e.target.className === "range-min") {
              rangeInput[0].value = maxVal - priceGap;
          } else {
              rangeInput[1].value = minVal + priceGap;
          }
      } else {
          priceInput[0].value = minVal;
          priceInput[1].value = maxVal;
          progress.style.left = ((minVal - rangeInput[0].min) / (rangeInput[0].max - rangeInput[0].min)) * 100 + "%";
          progress.style.right = 100 - ((maxVal - rangeInput[0].min) / (rangeInput[1].max - rangeInput[1].min)) * 100 + "%";
      }
  });
});

priceInput.forEach(input => {
  input.addEventListener("input", e => {
      let minVal = parseInt(priceInput[0].value),
          maxVal = parseInt(priceInput[1].value);

      if (maxVal - minVal >= priceGap && maxVal <= rangeInput[1].max) {
          if (e.target.className === "input-min") {
              rangeInput[0].value = minVal;
              progress.style.left = ((minVal - rangeInput[0].min) / (rangeInput[0].max - rangeInput[0].min)) * 100 + "%";
          } else {
              rangeInput[1].value = maxVal;
              progress.style.right = 100 - ((maxVal - rangeInput[0].min) / (rangeInput[1].max - rangeInput[1].min)) * 100 + "%";
          }
      }
  });
});

