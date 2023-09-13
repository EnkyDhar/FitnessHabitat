<footer>

<div class="foot-top">

<div class="container">

<div class="row">

<div class="wow zoomIn">

<div class="col-md-4 col-sm-4 col-xs-12">

<div class="foot-block">

<h4 class="foot-title">RESOURCES</h4>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : endif; ?>

<!--<ul class="social-icon mar-r">

<li class="active"><a href="index.html">Welcome</a></li>

<li><a href="about-us.html">About us </a></li>

<li><a href="blog.html">Blog </a></li>

<li><a href="store.html">Store</a></li>

<li><a href="contact.html">Contact</a></li>

</ul>

<ul class="social-icon"> <li> <a href="health-coaching.html"> Health Coaching</a> </li> <li> <a href="stress-management.html"> Stress Management</a> </li> <li> <a href="nutrition.html"> Nutrition</a> </li> <li> <a href="fitness-training.html"> Fitness Training</a> </li> <li> <a href="post-rehabilitation.html"> Post Rehabilitation</a> </li> </ul>-->

</div>

</div>

<div class="col-md-4 col-sm-4 col-xs-12">

<div class="foot-block">

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : endif; ?>

</div>

</div>

<div class="col-md-4 col-xs-12 col-sm-4 no-lpad">

<div class="foot-block">

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : endif; ?>

</div>

</div>

</div>

</div>

<div class="row">

 <div class="footer-bottom">

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : endif; ?>

</div>

</div>



</div>

</div>

<!--<div class="footer-bottom">

<p>Powered by <a href="http://www.amazing7.com/" target="_blank" class="orange">Amazing7 Studios  </a> © Copyright 2017. <span id="copyright-year"></span>  All Rights Reserved .</p>

</div>-->

</footer>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js" type="text/javascript"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>

<!--testimonial js-->

<!--<script src="js/owl.carousel.js" type="text/javascript"></script>-->

<!--<script src="js/wow.js" type="text/javascript"></script>-->

<script type="text/javascript">



//            $(window).scroll(function () {

//

//                if ($(this).scrollTop() > 100) {

//

//                    $('.scroll-to-top').fadeIn();

//

//                } else {

//

//                    $('.scroll-to-top').fadeOut();

//

//                }

//

//            });

            $('.scroll-to-top').click(function () {



                $('html, body').animate({scrollTop: 0}, 800);



                return false;



            });



            $('.carousel').carousel({

                interval: 6000,

                pause: false



            });

</script>



<script>

$(document).ready(function(){

  // Add smooth scrolling to all links

  $("a.scroll-work").on('click', function(event) {



    // Make sure this.hash has a value before overriding default behavior

    if (this.hash !== "") {

      // Prevent default anchor click behavior

      event.preventDefault();



      // Store hash

      var hash = this.hash;



      // Using jQuery's animate() method to add smooth page scroll

      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

      $('html, body').animate({

        scrollTop: $(hash).offset().top

      }, 800, function(){



        // Add hash (#) to URL when done scrolling (default click behavior)

        window.location.hash = hash;

      });

    } // End if

  });

});

</script>



<script type="text/javascript">

jQuery(function ($) {

wow = new WOW(

        {

            animateClass: 'animated',

            offset: 100,

            callback: function (box) {

                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">");

            }

        }

);

wow.init();



});

$(document).ready(function() {



      $("#owl-demo1").owlCarousel({

        items : 4,

        lazyLoad : true,

        autoPlay : 3000,

//        stopOnHover : true,

        navigation : true,

         paginationSpeed : 1000,

         goToFirstSpeed : 2000

      });

  $("#number1").click(function() {

      $("#number-show").show(500);

  });



   $("#month3").click(function() {

        $("#month-show3").show(500);

    });

     $("#month12").click(function() {

        $("#month-show12").show(500);

    });



    });



//$(window).load(function() {

//    $("#flexiselDemo4").flexisel({

//        infinite: false,

//        visibleItems: 4

//

//    });

//});



</script>

<script>    $(document).ready(function() {      $("#owl-demo").owlCarousel({        autoPlay : 3000,        stopOnHover : true,        navigation:true,        paginationSpeed : 1000,        goToFirstSpeed : 2000,        singleItem : true,        autoHeight : true,        transitionStyle:"fade"      });    });      </script>



<script>

/* conters */





function getTimeRemaining(endtime) {

  var t = Date.parse(endtime) - Date.parse(new Date());

  var seconds = Math.floor((t / 1000) % 60);

  var minutes = Math.floor((t / 1000 / 60) % 60);

  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);

  var days = Math.floor(t / (1000 * 60 * 60 * 24));

  return {

    'total': t,

    'days': days,

    'hours': hours,

    'minutes': minutes,

    'seconds': seconds

  };

}



function initializeClock(id, endtime) {

  var clock = document.getElementById(id);

  var daysSpan = clock.querySelector('.days');

  var hoursSpan = clock.querySelector('.hours');

  var minutesSpan = clock.querySelector('.minutes');

  var secondsSpan = clock.querySelector('.seconds');



  function updateClock() {

    var t = getTimeRemaining(endtime);



    daysSpan.innerHTML = t.days;

    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);

    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);

    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);



    if (t.total <= 0) {

      clearInterval(timeinterval);

    }

  }



  updateClock();

  var timeinterval = setInterval(updateClock, 1000);

}



var deadline = new Date(Date.parse(new Date()) + 45 * 24 * 60 * 60 * 1000);

initializeClock('clockdiv', deadline);







function getTimeRemaining(endtime) {

  var t = Date.parse(endtime) - Date.parse(new Date());

  var seconds = Math.floor((t / 1000) % 60);

  var minutes = Math.floor((t / 1000 / 60) % 60);

  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);

  var days = Math.floor(t / (1000 * 60 * 60 * 24));

  return {

    'total': t,

    'days': days,

    'hours': hours,

    'minutes': minutes,

    'seconds': seconds

  };

}



function initializeClock(id, endtime) {

  var clock = document.getElementById(id);

  var daysSpan = clock.querySelector('.days');

  var hoursSpan = clock.querySelector('.hours');

  var minutesSpan = clock.querySelector('.minutes');

  var secondsSpan = clock.querySelector('.seconds');



  function updateClock() {

    var t = getTimeRemaining(endtime);



    daysSpan.innerHTML = t.days;

    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);

    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);

    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);



    if (t.total <= 0) {

      clearInterval(timeinterval);

    }

  }



  updateClock();

  var timeinterval = setInterval(updateClock, 1000);

}



var deadline = new Date(Date.parse(new Date()) + 45 * 24 * 60 * 60 * 1000);

initializeClock('clockdiv1', deadline);

</script>



 <script>

              	jQuery(document).ready(function(){

    			jQuery('.search-link').on('click', function(event) {

         		jQuery('.search-box').toggle('show');

    			});

				});

              </script>

			    <script type="text/javascript">





$(document).ready(function(){



$('#name_check').hide();

$('#usere_check').hide();





var err1 = true;

var err2 = true;





$('#user_name').keyup(function(){

user_check();

});



function user_check(){



var name = $('#user_name').val();

if(name.trim()==null || name.trim()==""|| name===" "){

$('#name_check').show();

$('#name_check').html("**Please Enter your name");

$('#name_check').focus();

$('#name_check').css("color","red");

err1 = false;

return false;



}else{

$('#name_check').hide();

}



 if(!name.match(/^[a-zA-Z\s]*$/)){

$('#name_check').show();

$('#name_check').html("**Please Enter a valid Name");

$('#name_check').focus();

$('#name_check').css("color","red");

err1 = false;

return false;



}else{

$('#name_check').hide();

}





 if((name.length < 3 ) || (name.length > 20 ) ){

$('#name_check').show();

$('#name_check').html("**Name must be between 3 to 20 characters");

$('#name_check').focus();

$('#name_check').css("color","red");

err1 = false;

return false;



}else{

$('#name_check').hide();

}

}



$('#user_email').keyup(function(){

email2_check();

});



function email2_check(){



var usere = $('#user_email').val();



if(usere.trim()==null || usere.trim()==""|| usere===" "){

$('#usere_check').show();

$('#usere_check').html("**Please Enter the Email Address");

$('#usere_check').focus();

$('#usere_check').css("color","red");

err2 = false;

return false;



}else{

$('#usere_check').hide();

}



if(!usere.match(/^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i)){

$('#usere_check').show();

$('#usere_check').html("**Please Enter a valid Email Address");

$('#usere_check').focus();

$('#usere_check').css("color","red");

err2 = false;

return false;



}else{

$('#usere_check').hide();

}



}



$('#btn').click(function(){



err1 = true;

err2 = true;



user_check();

email2_check();







if((err1 == true ) && (err2 == true)){

return true;

}else{

return false;

}



});



});



</script>

			  <script type="text/javascript">





$(document).ready(function(){



$('#namecheck').hide();

$('#emailcheck').hide();





var user_err = true;

var email_err = true;





$('#username').keyup(function(){

username_check();

});



function username_check(){



var user_val = $('#username').val();

if(user_val.trim()==null || user_val.trim()==""|| user_val===" "){

$('#namecheck').show();

$('#namecheck').html("**Please Enter your name");

$('#namecheck').focus();

$('#namecheck').css("color","red");

user_err = false;

return false;



}else{

$('#namecheck').hide();

}



 if(!user_val.match(/^[a-zA-Z\s]*$/)){

$('#namecheck').show();

$('#namecheck').html("**Please Enter a valid Name");

$('#namecheck').focus();

$('#namecheck').css("color","red");

user_err = false;

return false;



}else{

$('#namecheck').hide();

}





 if((user_val.length < 3 ) || (user_val.length > 20 ) ){

$('#namecheck').show();

$('#namecheck').html("**Name must be between 3 to 20 characters");

$('#namecheck').focus();

$('#namecheck').css("color","red");

user_err = false;

return false;



}else{

$('#namecheck').hide();

}

}



$('#useremail').keyup(function(){

useremail_check();

});



function useremail_check(){



var email = $('#useremail').val();



if(email.trim()==null || email.trim()==""|| email===" "){

$('#emailcheck').show();

$('#emailcheck').html("**Please Enter the Email Address");

$('#emailcheck').focus();

$('#emailcheck').css("color","red");

email_err = false;

return false;



}else{

$('#emailcheck').hide();

}



if(!email.match(/^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i)){

$('#emailcheck').show();

$('#emailcheck').html("**Please Enter a valid Email Address");

$('#emailcheck').focus();

$('#emailcheck').css("color","red");

email_err = false;

return false;



}else{

$('#emailcheck').hide();

}



}



$('#submit').click(function(){



user_err = true;

email_err = true;



username_check();

useremail_check();







if((user_err == true ) && (email_err == true)){

return true;

}else{

return false;

}



});



});



</script>

<script type="text/javascript">





$(document).ready(function(){



$('#name-error').hide();

$('#email-error').hide();

$('#phone-error').hide();

$('#msg-error').hide();



var user_e = true;

var email_e = true;

var phone_e = true;

var msg_e =  true;

//var file_err = true;



$('#full-name').keyup(function(){

name_check();

});



function name_check(){



var user_name = $('#full-name').val();

if(user_name.trim()==null || user_name.trim()==""|| user_name===" "){

$('#name-error').show();

$('#name-error').html("**Please Enter your name");

$('#name-error').focus();

$('#name-error').css("color","red");

user_e = false;

return false;



}else{

$('#name-error').hide();

}



 if(!user_name.match(/^[a-zA-Z\s]*$/)){

$('#name-error').show();

$('#name-error').html("**Please Enter a valid Name");

$('#name-error').focus();

$('#name-error').css("color","red");

user_e = false;

return false;



}else{

$('#name-error').hide();

}





 if((user_name.length < 3 ) || (user_name.length > 20 ) ){

$('#name-error').show();

$('#name-error').html("**Name must be between 3 to 20 characters");

$('#name-error').focus();

$('#name-error').css("color","red");

user_e = false;

return false;



}else{

$('#name-error').hide();

}

}



$('#user-email').keyup(function(){

email_check();

});



function email_check(){



var user_email = $('#user-email').val();



if(user_email.trim()==null || user_email.trim()==""|| user_email===" "){

$('#email-error').show();

$('#email-error').html("**Please Enter the Email Address");

$('#email-error').focus();

$('#email-error').css("color","red");

email_e = false;

return false;



}else{

$('#email-error').hide();

}



if(!user_email.match(/^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i)){

$('#email-error').show();

$('#email-error').html("**Please Enter a valid Email Address");

$('#email-error').focus();

$('#email-error').css("color","red");

email_e = false;

return false;



}else{

$('#email-error').hide();

}



}





$('#user-phone').keyup(function(){

phone_check();

});



function phone_check(){



var userphone = $('#user-phone').val();



if(userphone.trim()==null || userphone.trim()==""|| userphone===" "){

$('#phone-error').show();

$('#phone-error').html("**Please Enter the Phone Number");

$('#phone-error').focus();

$('#phone-error').css("color","red");

phone_e = false;

return false;



}else{

$('#phone-error').hide();

}



if(!userphone.match(/^(?=.*[0-9])[- +()0-9]+$/)){

$('#phone-error').show();

$('#phone-error').html("**Please Enter a valid Phone Number");

$('#phone-error').focus();

$('#phone-error').css("color","red");

phone_e = false;

return false;



}else{

$('#phone-error').hide();

}



if((userphone.length < 5 ) || (userphone.length > 15 ) ){

$('#phone-error').show();

$('#phone-error').html("**Please Enter a valid Phone number");

$('#phone-error').focus();

$('#phone-error').css("color","red");

phone_e = false;

return false;



}else{

$('#phone-error').hide();

}

}



$('#user-msg').keyup(function(){

msg_check();

});



function msg_check(){



var msg = $('#user-msg').val();



if(msg.trim()==null || msg.trim()==""|| msg===" "){

$('#msg-error').show();

$('#msg-error').html("**Please write something");

$('#msg-error').focus();

$('#msg-error').css("color","red");

msg_e = false;

return false;



}else{

$('#msg-error').hide();

}



}











$('#sub').click(function(){



user_e = true;

email_e = true;

phone_e = true;

msg_e =  true;

//file_err = true;



name_check();

email_check();

phone_check();

msg_check();





if((user_e == true ) && (email_e == true) && (phone_e == true) && (msg_e == true)){

return true;

}else{

return false;

}



});



});



</script>

<?php wp_footer(); ?>

</body>

</html>