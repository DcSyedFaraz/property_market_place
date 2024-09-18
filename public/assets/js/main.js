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

var firstTabEl = document.querySelector("#myTab li:last-child a");
var firstTab = new bootstrap.Tab(firstTabEl);
firstTab.show();
