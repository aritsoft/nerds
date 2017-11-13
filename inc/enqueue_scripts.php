<?php

// Register Scripts.

// Bootstrap
wp_register_script( 'bootstrap', ADAMMP_JS . '/bootstrap.min.js', array('jquery'), '3.3.7', true );

// modernizr-2.8.3.min
wp_register_script( 'modernizr', ADAMMP_JS . '/modernizr-2.8.3.min.js', null, '2.8.3', true );

// waypoints.min
wp_register_script( 'waypoints', ADAMMP_JS . '/waypoints.min.js', null, '1.6.2', true );

// // Isotope
wp_register_script( 'isotope-js', ADAMMP_JS . '/jquery.isotope.js', null, '', true );

// custom_scripts
wp_register_script( 'adammp_custom_scripts', ADAMMP_JS . '/custom_scripts.js', null, '', true );

 
// Backtotop JS
wp_register_script( 'adammp-backtotop', ADAMMP_JS . '/back-to-top.js', null, '', true );

// Custom JS
wp_register_script( 'adammp-main', ADAMMP_JS . '/main.js', null, '', true );


// Bootstrap
wp_enqueue_script('bootstrap');

// modernizr
wp_enqueue_script('modernizr');

// waypoints
wp_enqueue_script('waypoints');

// custom_scripts
wp_enqueue_script('adammp_custom_scripts');

 // Isotope
wp_enqueue_script('isotope-js');


// Backtotop JS
wp_enqueue_script('adammp-backtotop');

// Custom JS
wp_enqueue_script('adammp-main');
