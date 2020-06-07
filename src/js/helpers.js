jQuery(document).ready(function ($) {
  $(document).scroll(function () {
    var transition = 'width 200ms ease-in-out, height 200ms ease-in-out'

    $('#logo').css({ width: $(this).scrollTop() > 100 ? "50%" : "100%", transition: transition });
  });
});