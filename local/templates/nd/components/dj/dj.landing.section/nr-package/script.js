$(document).ready(function () {
    $(".package__wrapper").owlCarousel(
        {
            nav: false,
            loop: false,
            responsive: {
                0: {
                    items: 2,
                },
                1080: {
                    items: 4,
                }
            }
        }
    );
})