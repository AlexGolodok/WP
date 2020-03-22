<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'custom_pizza_style' );
// add_action( 'wp_footer', 'custom_pizza_footer' );
// add_action( 'wp_footer', 'scripts_connect' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний

function custom_pizza_style() {
	wp_enqueue_style( 'main', get_stylesheet_uri() ); // подключение файла style.css
    wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/assets/css/icomoon.css');
    wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style( 'jquery.timepicker', get_template_directory_uri() . '/assets/css/jquery.timepicker.css');
    wp_enqueue_style( 'bootstrap-datepicker', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css');
    wp_enqueue_style( 'ionicons.min', get_template_directory_uri() . '/assets/css/ionicons.min.css');
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/css/aos.css');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style( 'owl.default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style( 'open-iconic-bootstrap.min', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.min.css');
}

// function scripts_connect() {
//     wp_enqueue_scripts( 'jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js', null, true );
//     wp_enqueue_scripts( 'jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js');
//     wp_enqueue_scripts( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js');
//     // wp_enqueue_scripts( 'main', get_template_directory_uri() . '/assets/js/main.js');
//     // wp_enqueue_scripts( 'main', get_template_directory_uri() . '/assets/js/main.js');
// }
?>
<!-- <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script> -->


<!-- <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css"> -->