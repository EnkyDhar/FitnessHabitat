<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php the_title(); ?></title>
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favi.png">
      <link href='<?php echo get_template_directory_uri(); ?>/css/style.css' rel='stylesheet' type='text/css'>
      <link href='<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
      <link href='<?php echo get_template_directory_uri(); ?>/css/animate.css' rel='stylesheet' type='text/css'>
      <link href='<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){



         $('#name_error').hide();

         $('#lname_error').hide();

         $('#emailerror').hide();



         var first_err = true;

         var last_err = true;

         var email_err = true;



         $('#account_first_name').keyup(function(){

         userfname_check();

         });



         function userfname_check(){



         var user_val = $('#account_first_name').val();

         if(user_val.trim()==null || user_val.trim()==""|| user_val===" "){

         $('#name_error').show();

         $('#name_error').html("**Please enter your first name");

         $('#name_error').focus();

         $('#name_error').css("color","red");

         first_err = false;

         return false;



         }else{

         $('#name_error').hide();

         }



         if(!user_val.match(/^[a-zA-Z\s]*$/)){

         $('#name_error').show();

         $('#name_error').html("**Please enter alphabets only");

         $('#name_error').focus();

         $('#name_error').css("color","red");

         first_err = false;

         return false;



         }else{

         $('#name_error').hide();

         }

         }

         $('#account_last_name').keyup(function(){

         userlname_check();

         });



         function userlname_check(){



         var lname_val = $('#account_last_name').val();

         if(lname_val.trim()==null || lname_val.trim()==""|| lname_val===" "){

         $('#lname_error').show();

         $('#lname_error').html("**Please enter your  last name");

         $('#lname_error').focus();

         $('#lname_error').css("color","red");

         last_err = false;

         return false;



         }else{

         $('#lname_error').hide();

         }



         if(!lname_val.match(/^[a-zA-Z\s]*$/)){

         $('#lname_error').show();

         $('#lname_error').html("**Please enter alphabets only");

         $('#lname_error').focus();

         $('#lname_error').css("color","red");

         last_err = false;

         return false;



         }else{

         $('#lname_error').hide();

         }



         }

         $('#account_email').keyup(function(){

         useremail_check();

         });



         function useremail_check(){



         var email = $('#account_email').val();



         if(email.trim()==null || email.trim()==""|| email===" "){

         $('#emailerror').show();

         $('#emailerror').html("**Please Enter the Email Address");

         $('#emailerror').focus();

         $('#emailerror').css("color","red");

         email_err = false;

         return false;



         }else{

         $('#emailerror').hide();

         }



         if(!email.match(/^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i)){

         $('#emailerror').show();

         $('#emailerror').html("**Please Enter a valid Email Address");

         $('#emailerror').focus();

         $('#emailerror').css("color","red");

         email_err = false;

         return false;



         }else{

         $('#emailerror').hide();

         }



         }



         $('#submit').click(function(){



         first_err = true;

         last_err = true;

         email_err = true;



         userfname_check();

         userlname_check();

         useremail_check();





         if((first_err == true ) && (last_err == true) && (email_err == true)){

         return true;

         }else{

         return false;

         }



         });



         });

      </script>
      <script type="text/javascript">
         $(document).ready(function(){



         $('#name_error1').hide();

         $('#lname_error1').hide();

         $('#emailerror1').hide();



         var first_err1 = true;

         var last_err1 = true;

         var email_err1 = true;



         $('#billing_first_name').keyup(function(){

         userfname_check1();

         });



         function userfname_check1(){



         var user_val1 = $('#billing_first_name').val();

         if(user_val1.trim()==null || user_val1.trim()==""|| user_val1===" "){

         $('#name_error1').show();

         $('#name_error1').html("**Please enter your first name");

         $('#name_error1').focus();

         $('#name_error1').css("color","red");

         first_err1 = false;

         return false;



         }else{

         $('#name_error1').hide();

         }



         if(!user_val1.match(/^[a-zA-Z\s]*$/)){

         $('#name_error1').show();

         $('#name_error1').html("**Please enter alphabets only");

         $('#name_error1').focus();

         $('#name_error1').css("color","red");

         first_err1 = false;

         return false;



         }else{

         $('#name_error1').hide();

         }

         }

         $('#billing_last_name').keyup(function(){

         userlname_check1();

         });



         function userlname_check1(){



         var lname_val1 = $('#billing_last_name').val();

         if(lname_val1.trim()==null || lname_val1.trim()==""|| lname_val1===" "){

         $('#lname_error1').show();

         $('#lname_error1').html("**Please enter your last name");

         $('#lname_error1').focus();

         $('#lname_error1').css("color","red");

         last_err1 = false;

         return false;



         }else{

         $('#lname_error1').hide();

         }



         if(!lname_val1.match(/^[a-zA-Z\s]*$/)){

         $('#lname_error1').show();

         $('#lname_error1').html("**Please enter alphabets only");

         $('#lname_error1').focus();

         $('#lname_error1').css("color","red");

         last_err1 = false;

         return false;



         }else{

         $('#lname_error1').hide();

         }



         }

         $('#billing_email').keyup(function(){

         useremail_check1();

         });



         function useremail_check1(){



         var email1 = $('#billing_email').val();



         if(email1.trim()==null || email1.trim()==""|| email1===" "){

         $('#emailerror1').show();

         $('#emailerror1').html("**Please Enter the Email Address");

         $('#emailerror1').focus();

         $('#emailerror1').css("color","red");

         email_err1 = false;

         return false;



         }else{

         $('#emailerror1').hide();

         }



         if(!email1.match(/^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i)){

         $('#emailerror1').show();

         $('#emailerror1').html("**Please Enter a valid Email Address");

         $('#emailerror1').focus();

         $('#emailerror1').css("color","red");

         email_err = false;

         return false;



         }else{

         $('#emailerror1').hide();

         }



         }



         $('#submit').click(function(){



         first_err1 = true;

         last_err1 = true;

         email_err1 = true;



         userfname_check1();

         userlname_check1();

         useremail_check1();





         if((first_err1 == true ) && (last_err1 == true) && (email_err1 == true)){

         return true;

         }else{

         return false;

         }



         });



         });

      </script>
      <script type="text/javascript">
         $(document).ready(function(){



         $('#name_error2').hide();

         $('#lname_error2').hide();





         var first_err2 = true;

         var last_err2 = true;





         $('#shipping_first_name').keyup(function(){

         userfname_check2();

         });



         function userfname_check2(){



         var user_val2 = $('#shipping_first_name').val();

         if(user_val2.trim()==null || user_val2.trim()==""|| user_val2===" "){

         $('#name_error2').show();

         $('#name_error2').html("**Please enter your first name");

         $('#name_error2').focus();

         $('#name_error2').css("color","red");

         first_err2 = false;

         return false;



         }else{

         $('#name_error2').hide();

         }



         if(!user_val2.match(/^[a-zA-Z\s]*$/)){

         $('#name_error2').show();

         $('#name_error2').html("**Please enter alphabets only");

         $('#name_error2').focus();

         $('#name_error2').css("color","red");

         first_err2 = false;

         return false;



         }else{

         $('#name_error2').hide();

         }

         }

         $('#shipping_last_name').keyup(function(){

         userlname_check2();

         });


         function userlname_check2(){

         var lname_val2 = $('#shipping_last_name').val();

         if(lname_val2.trim()==null || lname_val2.trim()==""|| lname_val2===" "){

         $('#lname_error2').show();

         $('#lname_error2').html("**Please enter your last name");

         $('#lname_error2').focus();

         $('#lname_error2').css("color","red");

         last_err1 = false;

         return false;


         }else{

         $('#lname_error2').hide();

         }

         if(!lname_val2.match(/^[a-zA-Z\s]*$/)){

         $('#lname_error2').show();

         $('#lname_error2').html("**Please enter alphabets only");

         $('#lname_error2').focus();

         $('#lname_error2').css("color","red");

         last_err2 = false;

         return false;



         }else{

         $('#lname_error2').hide();

         }


         }

         $('#submit').click(function(){

         first_err2 = true;

         last_err2 = true;
         userfname_check2();

         userlname_check2();


         if((first_err2 == true ) && (last_err2 == true)){

         return true;

         }else{

         return false;

         }

         });

         });

      </script>
      <?php wp_head(); ?>
   </head>
   <body <?php body_class( 'woocommerce' ); ?>>
      <section class="full-width">
        <header id="header" class="header-wrapper">
            <div class="container1">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-8">
                    <a class="logo" href="<?php echo get_bloginfo('url') ?>/"><img class="img-top" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"/> </a>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-10  mob-adjust">
                    <div class="row header-top">
                    <!-- <div class="col-xs-12 col-sm-8 col-md-8 no-lpad">
                        <ul class="top-social wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                            <li> <a class="text12" href="javascript:void(0)"> <i class="fa fa-youtube"> </i> </a> </li>
                            <li> <a class="text12" href="javascript:void(0)"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a class="text12" href="javascript:void(0)"> <i class="fa fa-linkedin"></i> </a> </li>
                            <li> <a class="text12" href="javascript:void(0)"> <i class="fa fa-instagram"></i> </a> </li>
                            <li> <a class="text12" href="javascript:void(0)"> <i class="fa fa-twitter"></i> </a> </li>
                            <li> <a class="text12" href="javascript:void(0)"> <i class="fa fa-vimeo "></i> </a> </li>
                            <li> <a class="text12 color" href="javascript:void(0)"> <i class="fa fa-google-plus "></i> </a> </li>
                        </ul>
                        </div> -->
                    <div class="col-xs-12 col-sm-9 col-md-3 hidden-xs">
                        <div class="pull-right">
                            <div class="dropdown1">
                                <input class="dropdown-toggle" type="text"/>
                                <div class="dropdown-text"> JOIN</div>
                                <ul class="dropdown-content">
                                <form action="<?php echo get_bloginfo('url') ?>/register.php" method="POST" class="log-form">
                                    <li> <label> Email</label> <input type="email" class="form-control" name="user_email"/> </li>
                                    <li> <label> Username</label> <input type="text" class="form-control" name="user_login"/> </li>
                                    <li> <label> Password</label> <input type="password" class="form-control" name="password"/> </li>
                                    <li> <input type="submit" name="submit" Value="Signup"/></li>
                                </form>
                                </ul>
                            </div>
                            <ul class="sign-dropdown">
                                <!--
                                <li> <a>  JOIN</a>
                                <ul class="wow fadeInRight">
                                    <form action="http://amazingseven.net/fitnesshabitat/register.php" method="POST">
                                        <li> <label> Email</label> <input type="email" class="form-control" name="user_email"/> </li>
                                    <li> <label> Username</label> <input type="text" class="form-control" name="user_login"/> </li>
                                <li> <label> Password</label> <input type="password" class="form-control" name="password"/> </li>
                                <li> <input type="submit" name="submit" Value="Signup"</li>
                                        </form>
                                </ul>
                                </li>
                                -->
                                <div class="dropdown1">
                                <input class="dropdown-toggle" type="text"/>
                                <div class="dropdown-text"> LOGIN</div>
                                <ul class="dropdown-content">
                                    <?php
                                        global $user_login;
                                        // In case of a login error.
                                        if ( isset( $_GET['login'] ) && $_GET['login'] == 'failed' ) : ?>
                                    <div class="aa_error">
                                        <p><?php _e( 'FAILED: Try again!', 'AA' ); ?></p>
                                    </div>
                                    <?php
                                        endif;
                                        // If user is already logged in.
                                        if ( is_user_logged_in() ) : ?>
                                    <div class="aa_logout">
                                        <?php
                                            _e( 'Hello', 'AA' );
                                            echo $user_login;
                                            ?>
                                        <br>
                                        <?php _e( 'You are already logged in.', 'AA' ); ?>
                                    </div>
                                    <a id="wp-submit" href="<?php echo wp_logout_url(); ?>" title="Logout">
                                    <?php _e( 'Logout', 'AA' ); ?>
                                    </a>
                                    <?php
                                        // If user is not logged in.
                                        else:

                                            // Login form arguments.
                                            $args = array(
                                                'echo'           => true,
                                                'redirect'       => home_url( '/wp-admin/' ),
                                                'form_id'        => 'loginform',
                                                'label_username' => __( 'Username Or Email' ),
                                                'label_password' => __( 'Password' ),
                                                'label_remember' => __( 'Remember Me' ),
                                                'label_log_in'   => __( 'Log In' ),
                                                'id_username'    => 'user_login',
                                                'id_password'    => 'user_pass',
                                                'id_remember'    => 'rememberme',
                                                'id_submit'      => 'wp-submit',
                                                'remember'       => true,
                                                'value_username' => NULL,
                                                'value_remember' => true
                                            );

                                            // Calling the login form.
                                            wp_login_form( $args );
                                        endif;
                                        ?>
                                    <!--<li> <label> Username</label> <input type="text" class="form-control"/> </li>
                                        <li> <label> Password</label> <input type="text" class="form-control"/> </li>
                                        <li> <input type="checkbox" class=""/> <label>Remember me</label> </li>
                                        <li> <button type="button" class="btn btn-common btn-sm">Login</button> </li>--->
                                </ul>
                                </div>
                            </ul>
                        </div>
                    </div>

                </div>

                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-9 col-xs-12 col-sm-10">
                            <div class="header-navigation" aria-label="Main Navigation">
                                <button type="button" class="navbar-toggle mob-btn collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="navbar-toggle-icon"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </span></button>
                                <nav id="navbar" class="collapse navbar-collapse row mob-drop">
                                    <ul class="main-navigation">
                                    <?php
                                        // Main navbar (right)
                                        wp_nav_menu( array(
                                        'header-menu'              => 'primary',
                                        'theme_location'    => 'primary',
                                        'depth' => 2,
                                        'container'         => false,
                                        'menu_class'        => 'menu main-navigation',
                                        'walker'            => new wp_bootstrap_navwalker()) );
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-2 text-right">

                            <ul class="sear-pho">
                                <!-- dropdown -->
                                <div class="pull-right">
                                    <div class="dropdown1">
                                        <input class="dropdown-toggle" type="text"/>
                                        <div class="dropdown-text"> JOIN</div>
                                        <ul class="dropdown-content">
                                        <form action="<?php echo get_bloginfo('url') ?>/register.php" method="POST" class="log-form">
                                            <li> <label> Email</label> <input type="email" class="form-control" name="user_email"/> </li>
                                            <li> <label> Username</label> <input type="text" class="form-control" name="user_login"/> </li>
                                            <li> <label> Password</label> <input type="password" class="form-control" name="password"/> </li>
                                            <li> <input type="submit" name="submit" Value="Signup"/></li>
                                        </form>
                                        </ul>
                                    </div>
                                    <ul class="sign-dropdown">
                                        <!--
                                        <li> <a>  JOIN</a>
                                        <ul class="wow fadeInRight">
                                            <form action="http://amazingseven.net/fitnesshabitat/register.php" method="POST">
                                                <li> <label> Email</label> <input type="email" class="form-control" name="user_email"/> </li>
                                            <li> <label> Username</label> <input type="text" class="form-control" name="user_login"/> </li>
                                        <li> <label> Password</label> <input type="password" class="form-control" name="password"/> </li>
                                        <li> <input type="submit" name="submit" Value="Signup"</li>
                                                </form>
                                        </ul>
                                        </li>
                                        -->
                                        <div class="dropdown1">
                                        <input class="dropdown-toggle" type="text"/>
                                        <div class="dropdown-text"> LOGIN</div>
                                        <ul class="dropdown-content">
                                            <?php
                                                global $user_login;
                                                // In case of a login error.
                                                if ( isset( $_GET['login'] ) && $_GET['login'] == 'failed' ) : ?>
                                            <div class="aa_error">
                                                <p><?php _e( 'FAILED: Try again!', 'AA' ); ?></p>
                                            </div>
                                            <?php
                                                endif;
                                                // If user is already logged in.
                                                if ( is_user_logged_in() ) : ?>
                                            <div class="aa_logout">
                                                <?php
                                                    _e( 'Hello', 'AA' );
                                                    echo $user_login;
                                                    ?>
                                                <br>
                                                <?php _e( 'You are already logged in.', 'AA' ); ?>
                                            </div>
                                            <a id="wp-submit" href="<?php echo wp_logout_url(); ?>" title="Logout">
                                            <?php _e( 'Logout', 'AA' ); ?>
                                            </a>
                                            <?php
                                                // If user is not logged in.
                                                else:

                                                    // Login form arguments.
                                                    $args = array(
                                                        'echo'           => true,
                                                        'redirect'       => home_url( '/wp-admin/' ),
                                                        'form_id'        => 'loginform',
                                                        'label_username' => __( 'Username Or Email' ),
                                                        'label_password' => __( 'Password' ),
                                                        'label_remember' => __( 'Remember Me' ),
                                                        'label_log_in'   => __( 'Log In' ),
                                                        'id_username'    => 'user_login',
                                                        'id_password'    => 'user_pass',
                                                        'id_remember'    => 'rememberme',
                                                        'id_submit'      => 'wp-submit',
                                                        'remember'       => true,
                                                        'value_username' => NULL,
                                                        'value_remember' => true
                                                    );

                                                    // Calling the login form.
                                                    wp_login_form( $args );
                                                endif;
                                                ?>
                                            <!--<li> <label> Username</label> <input type="text" class="form-control"/> </li>
                                                <li> <label> Password</label> <input type="text" class="form-control"/> </li>
                                                <li> <input type="checkbox" class=""/> <label>Remember me</label> </li>
                                                <li> <button type="button" class="btn btn-common btn-sm">Login</button> </li>--->
                                        </ul>
                                        </div>
                                    </ul>
                                </div>

                                <!-- <li><i class="fa fa-phone"></i> <a href="tel:9179920730">917 992 0730</a></li> -->
                                <li>
                                    <a class="search-link" href="#"><i class="fa fa-search sa"></i></a>
                                    <div class="search-box" style="display:none;">
                                    <form role="search" method="post" id="searchform" class="searchform" action="javascript:void(0);">
                                        <input type="text" placeholder="Search" class="search-input">
                                        <button type="submit" class="serach-btn"><i class="fa fa-search"></i></button>
                                    </form>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
        </header>

      <div class="clearfix"></div>