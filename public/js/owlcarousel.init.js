//Owl Carousel
    $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        stopOnHover: true,
        navigation: false,
        paginationSpeed: 1000,
        goToFirstSpeed: 2000,
        singleItem: true,
        autoHeight: true,
    });

    $("#partners").owlCarousel({
        autoPlay: 3000,
        stopOnHover: true,
        navigation: false,
        paginationSpeed: 1000,
        goToFirstSpeed: 2000,
        autoHeight: true,
        items: 6,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [768, 3]
    });

    $("#services").owlCarousel({
        autoPlay: 3000,
        stopOnHover: true,
        navigation: false,
        paginationSpeed: 1000,
        goToFirstSpeed: 2000,
        autoHeight: true,
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [768, 3]
    });

    $("#testi-two").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items: 2,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [979, 2]
    });

    $("#owl-dark").owlCarousel({
        autoPlay: 3000,
        stopOnHover: true,
        navigation: false,
        paginationSpeed: 1000,
        goToFirstSpeed: 2000,
        singleItem: true,
        autoHeight: true,
    });

    $("#owl-bg-img").owlCarousel({
        autoPlay: 3000,
        stopOnHover: true,
        navigation: false,
        paginationSpeed: 1000,
        goToFirstSpeed: 2000,
        singleItem: true,
        autoHeight: true,
    });

    $("#owl-success-stories").owlCarousel({
        center: true,
        // autoPlay: 3000,
        items: 2,
        // margin: 10,
        // loop:true,
        // stopOnHover: true,
        // navigation: true,
        nav: true,
        navText: [
            '<div>&#129120;</div>',
            '<div>&#129122;</div>'
        ],
        // paginationSpeed: 1000,
        // goToFirstSpeed: 2000,
        // singleItem: true,
        autoHeight: true,
        autoWidth: true,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            },
            1000:{
                items:2
            }
        }
        // itemsDesktop: [1199, 2],
        // itemsDesktopSmall: [979, 2]
        
    });