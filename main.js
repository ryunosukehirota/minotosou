$(function() {
    $('.navToggle').click(function() {
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active');
        } else {
            $('.globalMenuSp').removeClass('active');
        }

    });
    $('.globalMenuSp a').click(function() {
        $('.navToggle').toggleClass('active');

        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active');
        } else {
            $('.globalMenuSp').removeClass('active');
        }

    });

});

$(window).scroll(function() {
  var windowH = $(window).height(),
    scrollY = $(window).scrollTop();
  $('img').each(function() {
    var imgPosition = $(this).offset().top;
    if (scrollY > imgPosition - windowH) {
      $(this).addClass("img-blur");
    }
  });
});
