$( document ).ready(function() {

    // if is some session hide it after 3 seconds
    $('#flash-message').delay(3000).hide(3000);

    // if is some session status hide it after 3 seconds
    $('#status').delay(3000).hide(3000);

    //navbar scroll function
    var actualPosition = $('#head-nav').offset().top;

	$(window).scroll(function (event) {
    if($(window).scrollTop() > $('#main').offset().top) {
      $('#head-nav').addClass('fixed');
    } else {
          $('#head-nav').removeClass('fixed');}
	});

  //if scroll, add active class in nav
  var addClassOnScroll = function () {
    var windowTop = $(window).scrollTop();
    $('section[id]').each(function (index, elem) {
        var offsetTop = $(elem).offset().top;
        var outerHeight = $(this).outerHeight(true);

        if( windowTop > (offsetTop - 50) && windowTop < ( offsetTop + outerHeight)) {
            var elemId = $(elem).attr('id');
            $("nav ul li a.active").removeClass('active');
            $("nav ul li a[href='#" + elemId + "']").addClass('active');
        }
    });
  };

  $(function () {
      $(window).on('scroll', function () {
          addClassOnScroll();
      });
  });

});