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

});