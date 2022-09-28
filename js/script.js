// Событие, которое отслеживает скроллит ли человек.
document.addEventListener('scroll', function () {
  if ($(window).scrollTop() > 1000)) {
    // если больше 1000 → добавляем класс
    $('.js-header-fixed').addClass('is-show');
  } else {
    // если меньше 1000 → удаляем класс
    $('.js-header-fixed').removeClass('is-show');
  }    
}) 