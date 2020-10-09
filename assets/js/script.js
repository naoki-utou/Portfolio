 
   // swiper
   var swiper = new Swiper('.swiper-container', {
   	  loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 2000,
      },
      speed: 1300,
      slidesPerView: "auto",
      spaceBetween: 30,
    	initialSlide: 0,
    });

  // WOW
  new WOW().init();

  jQuery(function() {

    // ナビゲーション
    jQuery('.js_toggle').on('click', function() {
      jQuery('.js_nav').fadeToggle(300);
      jQuery(this).toggleClass('js_open');
      jQuery('body').toggleClass('js_noscroll');
    });

    return false;
    
  });

  