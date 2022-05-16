const swiper1 = new Swiper('.popular-excursions__info', {
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    600: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    986: {
      slidesPerView: 3,
      spaceBetween: 30,
    }
  },


  navigation: {
  nextEl: '.popular-excursion__arrow-right',
  prevEl: '.popular-excursion__arrow-left',
  },

});


const swiper2 = new Swiper('.body-excursion__container-net-big', {
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    600: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    986: {
      slidesPerView: 3,
      spaceBetween: 30,
    }
  },

  navigation: {
      nextEl: '.body-excursion__arrow-right',
      prevEl: '.body-excursion__arrow-left',
  },

});


const swiper3 = new Swiper('.reviews__container', {
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    986: {
      slidesPerView: 1,
      spaceBetween: 30,
    }
  },


  navigation: {
  nextEl: '.reviews-container__arrow-right',
  prevEl: '.reviews-container__arrow-left',
  },

});

