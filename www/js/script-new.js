const swiper1 = new Swiper('.popular-excursions__info', {
    // // If we need pagination
    // pagination: {
    //   el: '.swiper-pagination',
    // },

    navigation: {
    nextEl: '.popular-excursion__arrow-right',
    prevEl: '.popular-excursion__arrow-left',
    },

});


const swiper2 = new Swiper('.body-excursion__container-net-big', {
    // // If we need pagination
    // pagination: {
    //   el: '.swiper-pagination',
    // },

    // breakpoints: {
    //     600: {
    //       slidesPerView: 1,
    //       spaceBetween: 30,
    //     },
    //     986: {
    //       slidesPerView: 2,
    //       spaceBetween: 40,
    //     },
    //     // 1147: {
    //     //   slidesPerView: 3,
    //     //   spaceBetween: 30,
    //     // },
    // },

    navigation: {
        nextEl: '.body-excursion__arrow-right',
        prevEl: '.body-excursion__arrow-left',
    },

});


const swiper3 = new Swiper('.reviews__container', {
    // // If we need pagination
    // pagination: {
    //   el: '.swiper-pagination',
    // },

    navigation: {
    nextEl: '.reviews-container__arrow-right',
    prevEl: '.reviews-container__arrow-left',
    },

});

