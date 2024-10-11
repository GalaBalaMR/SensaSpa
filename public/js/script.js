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

  //hide and show content form
  var $content_form_div = $('.content-form-div');
      $content_form_a = $('.content-form-a');

  $content_form_div.hide();

  $content_form_a.each(function(){
  $(this).on('click', function(event){
    event.preventDefault();
    $(this).next().slideToggle(1000);
  })
  })

  $('.content-textarea').trumbowyg();

  // Ajax for mail
  
  var ajaxMailForm = $('#contaktMail');
      checkAgreement = $('#CheckAgreement');
      $alert = $('<div class="alert"></div>');
      $alert_p = $('<p></p>');
      $loader  = $('#loader');

  $alert_p.appendTo($alert); 

  ajaxMailForm.on('submit', function(e){
    e.preventDefault();
    
    var $this_form = $(this);

    if (checkAgreement.is(':checked')){
      $.ajax({
        url:  $(this).attr('action'),
        method: 'POST',
        data: $(this).serialize(),
        beforeSend: function(){
          $loader.removeClass('d-none');
        },
        complete: function(){
          $loader.addClass('d-none');
          
        },
        success: function(data){
          //add value, delay and hide on ALERT
          //prepend it on info-mail 
  
          $alert_p.text(data.flash);
          $alert.insertAfter(checkAgreement.parent()).hide().slideDown(500);
          if(data.success == '1'){
            $alert.addClass('alert-success');
          }else{
            $alert.addClass('alert-danger');
          }
          $alert.show();
          $alert.delay(3000).hide(2000);
          $this_form.trigger("reset");
  
        }
      })
    }else{

      $alert_p.text('Na odoslanie emailu potvrďte, že súhlasíte so spracovaním osobných údajov.');
      $alert.insertAfter(checkAgreement.parent()).hide().slideDown(500);
      $alert.addClass('alert-danger');
      $alert.show();
      $alert.delay(3000).hide(2000);
    }

  })

  // Ajax for delete project

  var delProject = $('.delProject');

  delProject.each(function(){
    
    $(this).on('submit', function(e){
      e.preventDefault();
      var $this_form = $(this);
      $.ajax({
        url:  $(this).attr('action'),
        method: 'POST',
        data: $(this).serialize(),
        beforeSend: function(){
          $loader.removeClass('d-none');
        },
        complete: function(){
          $loader.addClass('d-none');
          
        },
        success: function(data){
          //add value, delay and hide on ALERT
          //prepend it on info-mail 

          $alert_p.text(data.flash);
          $alert.prependTo('.portfolio-isotope').hide().slideDown(500);
          if(data.status == '1'){
            $alert.addClass('alert-success');
            $('#portfolio-'+ data.id).hide(1500);
          }else{
            $alert.addClass('alert-danger');
          }
          $alert.show();
          $alert.delay(3000).hide(2000);

        }
      })
    })
  });

});