const swiper2 = new Swiper('.swiper2', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });


  var swiper1 = new Swiper(".Swiper1", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    loop:true,
  });

  var swiper3 = new Swiper(".swiper3", {
    slidesPerView: 3,
    spaceBetween: 30,
    // autoplay: 300,
    // speed: 800,
    // autoplayDisableOnInteraction: false,
    autoplay: {
      delay: 5000,
    },
    loop: true,
  });