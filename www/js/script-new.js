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
    1024: {
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
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    }
  },

  navigation: {
      nextEl: '.body-excursion__arrow-right',
      prevEl: '.body-excursion__arrow-left',
  },

});


const breakpoint = window.matchMedia( '(min-width:1024px)' );

let mySwiper;

const breakpointChecker = function() {
   
  if ( breakpoint.matches === true ) {
      
    if ( mySwiper !== undefined ) mySwiper.destroy( true, true );
      
    return;

  } else if ( breakpoint.matches === false ) {
    return enableSwiper();
  }
};

const enableSwiper = function() {
  mySwiper = new Swiper ('.reviews__container', {
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      // 986: {
      //   slidesPerView: 1,
      //   spaceBetween: 30,
      // }
    },
  
  
    navigation: {
    nextEl: '.reviews-container__arrow-right',
    prevEl: '.reviews-container__arrow-left',
    },
  });
};

breakpoint.addListener(breakpointChecker);

breakpointChecker();





const firstMenuItem = document.getElementsByClassName("navigation-item__list")[0];

const menuSelect = document.getElementsByClassName("navigation-item__info-select")[0];

if (menuSelect) {
  menuSelect.addEventListener("click", function(e) {
    e.preventDefault();
    firstMenuItem.classList.toggle('navigation-item__list--active');
  });
};


const swiperFeedback = new Swiper('.feedback-people', {
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
  },

  navigation: {
    nextEl: '.feedback-arrow2',
    prevEl: '.feedback-arrow1',
  },
});

const burgerIconClosed = document.getElementsByClassName("header-burger-link")[0];

const burgerIconOpen = document.getElementsByClassName("header-burger-menu-arrow")[0];

const burgerMenu = document.getElementsByClassName("header-burger-menu")[0];

burgerIconClosed.addEventListener("click", function(e) {
  e.preventDefault();
  burgerMenu.classList.add('header-burger-menu--active');
});

burgerIconOpen.addEventListener("click", function(e) {
  e.preventDefault();
  burgerMenu.classList.remove('header-burger-menu--active');
});