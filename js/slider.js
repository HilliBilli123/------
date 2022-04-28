// Инициализируем Swiper
new Swiper('.image-slider',{
    // Стрелки
    navigation: {
        prevEl: '.swiper-button-prev',
        nextEl: '.swiper-button-next'
    },
    // Навигация
    // Буллеты, текущее положение, прогресс бар
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },
    // Скролл
    // scrollbar: {
    //     el: '.swiper-scrollbar',
    //     draggable: true,
    // }
    // Включение/отключение перетаскивание на ПК
    simulateTouch: true,
    // Чувствительность свайпа 
    touchratio: 1,
    // Угол срабатывание 
    touchangle: 45,
    // Курсор перетаскиване
    grabCursor: true,
    // Бесконечный слайд
    loop: true,
    // slidesPerView: 1,
    // Автопрокрутка 
    // autoplay: {
    //     // Пауза между прокруткой
    //     delay: 5000, // 5 sec
    //     // Закончить на последнем слайде 
    //     stopOnLastSlide: false, 
    //     // Отключить после ручного переключения
    //     disableOnInteraction: false,
    // },

    // Скорость переключения 
    speed: 800,
    
});

// Модели слайдер

new Swiper('.models-slider',{
    // Стрелки
    navigation: {
        prevEl: '.swiper-button-prev',
        nextEl: '.swiper-button-next'
    },
    // Навигация
    // Буллеты, текущее положение, прогресс бар
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },
    // Скролл
    // scrollbar: {
    //     el: '.swiper-scrollbar',
    //     draggable: true,
    // }
    // Включение/отключение перетаскивание на ПК
    simulateTouch: true,
    // Чувствительность свайпа 
    touchratio: 1,
    // Угол срабатывание 
    touchangle: 45,
    // Курсор перетаскиване
    grabCursor: true,
    // Количество слайдов
    slidesPerView: 2,
    loop: true,
    autoHeight:true,
    loopedSlides: 2,
    // spaceBetween: 30,

    
    // slidesPerView: 1,
    // Автопрокрутка 
    // autoplay: {
    //     // Пауза между прокруткой
    //     delay: 5000, // 5 sec
    //     // Закончить на последнем слайде 
    //     stopOnLastSlide: false, 
    //     // Отключить после ручного переключения
    //     disableOnInteraction: false,
    // },

    // Скорость переключения 
    speed: 800,
    
});