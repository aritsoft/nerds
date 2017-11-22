<?php

// Register Stylesheets.

// Bootstrap
wp_register_style( 'bootstrap', ADAMMP_CSS . '/bootstrap.min.css', null, '3.3.7', 'all' );

// Font Awesome
wp_register_style( 'font-awesome', ADAMMP_CSS . '/font-awesome.min.css', null, '4.5.0', 'all' );

// et-line-iocn
wp_register_style( 'et-line-iocn', ADAMMP_CSS . '/et-line-iocn.css', null, '1.0', 'all' );

// Elements CSS
wp_register_style( 'adammp-elements-style', ADAMMP_CSS . '/elements.css', null, '1.0', 'all' );

// Custom CSS
wp_register_style( 'adammp-custom-style', ADAMMP_CSS . '/custom.css', null, '1.0', 'all' );

// Responsive Style 1.0
wp_register_style( 'adammp-responsive-style', ADAMMP_CSS . '/responsive.css', null, '1.0', 'all' );



// Load Stylesheets.

// Bootstrap
wp_enqueue_style('bootstrap');

// Font Awesome
wp_enqueue_style('font-awesome');

// et-line-iocn
wp_enqueue_style('et-line-iocn');

// Elements CSS
wp_enqueue_style('adammp-elements-style');

// Custom CSS
wp_enqueue_style('adammp-custom-style');

// Responsive Style 1.0
wp_enqueue_style('adammp-responsive-style');