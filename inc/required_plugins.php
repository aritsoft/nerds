<?php
	/**
	 * This file represents an example of the code that themes would use to register
	 * the required plugins.
	 *
	 * It is expected that theme authors would copy and paste this code into their
	 * functions.php file, and amend to suit.
	 *
	 * @see        http://tgmpluginactivation.com/configuration/ for detailed documentation.
	 *
	 * @package    TGM-Plugin-Activation
	 * @subpackage Example
	 * @version    2.6.1
	 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
	 * @copyright  Copyright (c) 2011, Thomas Griffin
	 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
	 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
	 */
	/**
	 * Include the TGM_Plugin_Activation class.
	 */

    defined( 'ABSPATH' ) or die( 'Keep Silent' );

	require get_template_directory() . '/tgmpa/class-tgm-plugin-activation.php';

	add_action( 'tgmpa_register', 'adammp_register_required_plugins' );
	/**
	 * Register the required plugins for this theme.
	 *
	 * In this example, we register five plugins:
	 * - one included with the TGMPA library
	 * - two from an external source, one from an arbitrary source, one from a GitHub repository
	 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
	 *
	 * The variable passed to tgmpa_register_plugins() should be an array of plugin
	 * arrays.
	 *
	 * This function is hooked into tgmpa_init, which is fired within the
	 * TGM_Plugin_Activation class constructor.
	 */
	function adammp_register_required_plugins() {
        
        $adam_plugins = get_template_directory() . '/plugins';
        
		/*
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */

		$plugins = array(
							// Visual Composer
		array(
			'name'               => 'WPBakery Visual Composer',
			'slug'               => 'js_composer',
			'source'             => $adam_plugins . '/js_composer.zip',
			'required'           => true,
			'force_activation'   => false,
			'force_deactivation' => false,
		),

                            // Slider Revolution
		array(
			'name'               => 'Slider Revolution',
			'slug'               => 'revslider',
			'source'             => $adam_plugins . '/revslider.zip',
			'required'           => true,
			'force_activation'   => false,
			'force_deactivation' => false,
		),
            
            // Adam Post Types & Taxonomies
        array(
            'name'               => 'Adam Post Types & Taxonomies',
            'slug'               => 'adamwp-cpt',
            'source'             => $adam_plugins . '/adamwp-cpt.zip',
            'required'           => true,
            'force_activation'   => false,
            'force_deactivation' => false,
        ),
		

							// Addons for Visual Composer
		array(
			'name'               => 'Addons for Visual Composer',
			'slug'               => 'addons-for-visual-composer',
			'required'           => true,
		),
			
							// Contact Form 7
		array(
			'name'               => 'Contact Form 7', 
			'slug'               => 'contact-form-7', 
			'required'           => true, 
		),


							// Redux Framework
		array(
			'name'               => 'Redux Framework', 
			'slug'               => 'redux-framework', 
			'required'           => true, 
		),

							// Social Icons Widget by WPZOOM
		array(
			'name'               => 'Social Icons Widget by WPZOOM', 
			'slug'               => 'social-icons-widget-by-wpzoom', 
			'required'           => true, 
		),
		
		                   // MailChimp for WordPress
		array(
			'name'               => 'MailChimp for WordPress', 
			'slug'               => 'mailchimp-for-wp', 
			'required'           => true, 
		),
		
		                  // CMB2
		array(
			'name'               => 'CMB2', 
			'slug'               => 'cmb2', 
			'required'           => true,
		),
		
		                 // WooCommerce
		array(
			'name'               => 'WooCommerce',
			'slug'               => 'woocommerce',
			'required'           => true,
		),
			
			            // Recent Posts Widget Extended
		array(
			'name'               => 'Recent Posts Widget Extended',
			'slug'               => 'recent-posts-widget-extended',
			'required'           => true,
		),
			
			
			            // One Click Demo Import
		array(
			'name'               => 'One Click Demo Import',
			'slug'               => 'one-click-demo-import',
			'required'           => true,
		),
			
			
            
		);

		// Change this to your theme text domain, used for internationalising strings
		$theme_text_domain = 'nerds';


		/*
		 * Array of configuration settings. Amend each line as needed.
		 *
		 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
		 * strings available, please help us make TGMPA even better by giving us access to these translations or by
		 * sending in a pull-request with .po file(s) with the translations.
		 *
		 * Only uncomment the strings in the config array if you want to customize the strings.
		 */
		$config = array(
			'id'           => 'tgmpa',
			// Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',
			// Default absolute path to bundled plugins.
			'menu'         => 'tgmpa-install-plugins',
			// Menu slug.
			'parent_slug'  => 'themes.php',
			// Parent menu slug.
			'capability'   => 'edit_theme_options',
			// Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => TRUE,
			// Show admin notices or not.
			'dismissable'  => TRUE,
			// If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',
			// If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => FALSE,
			// Automatically activate plugins after installation or not.
			'message'      => '',
			// Message to output right before the plugins table.
		);
		tgmpa( $plugins, $config );
	}
