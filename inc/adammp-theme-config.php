<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if (!class_exists('Redux')) {
    return;
}


// This is your option name where all the Redux data is stored.
$opt_name = "adammp_option";

// This line is only for altering the demo. Can be easily removed.
$opt_name = apply_filters('redux_demo/opt_name', $opt_name);

/*
 *
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 *
 */

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name' => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name' => $theme->get('Name'),
    // Name that appears at the top of your panel
    'display_version' => $theme->get('Version'),
    // Version that appears at the top of your panel
    'menu_type' => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu' => true,
    // Show the sections below the admin menu item or not
    'menu_title' => esc_html__('Adam Options', 'adammp'),
    'page_title' => esc_html__('Adam Theme Options Panel', 'adammp'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key' => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography' => false,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar' => false,
    // Show the panel pages on the admin bar
    'admin_bar_icon' => 'dashicons-admin-settings',
    // Choose an icon for the admin bar menu
    'admin_bar_priority' => 50,
    // Choose an priority for the admin bar menu
    'global_variable' => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode' => false,
    // Show the time the page took to load, etc
    'update_notice' => true,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer' => false,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
    
    // OPTIONAL -> Give you extra features
    'page_priority' => 30,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent' => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions' => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon' => 'dashicons-admin-settings',
    // Specify a custom URL to an icon
    'last_tab' => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon' => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug' => '',
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults' => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show' => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark' => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export' => true,
    // Shows the Import/Export panel when not used as a field.
    
    'show_options_object' => false,
    // Removes the options_object panel when not used.
    
    // CAREFUL -> These options are for advanced use only
    'transient_time' => 60 * MINUTE_IN_SECONDS,
    'output' => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag' => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
    
    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database' => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn' => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
    
    // HINTS
    'hints' => array(
        'icon' => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color' => 'lightgray',
        'icon_size' => 'normal',
        'tip_style' => array(
            'color' => 'red',
            'shadow' => true,
            'rounded' => false,
            'style' => ''
        ),
        'tip_position' => array(
            'my' => 'top left',
            'at' => 'bottom right'
        ),
        'tip_effect' => array(
            'show' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'mouseover'
            ),
            'hide' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'click mouseleave'
            )
        )
    )
);


// Panel Intro text -> before the form
if (!isset($args['global_variable']) || $args['global_variable'] !== false) {
    if (!empty($args['global_variable'])) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace('-', '_', $args['opt_name']);
    }
    $args['intro_text'] = sprintf(__('If you like our theme and support, please rate it 5 stars and leave an amazing review on Themeforest. We will appreciate that.', 'adammp'), $v);
} else {
    $args['intro_text'] = esc_html__('Customize your website using the adammp Theme Options Panel.', 'adammp');
}

// Add content after the form.
$args['footer_text'] = esc_html__('', 'adammp');

Redux::setArgs($opt_name, $args);

/*
 * ---> END ARGUMENTS
 */


/*
 * ---> START HELP TABS
 */

// Set the help sidebar
$content = esc_html__('<p>This is the sidebar content, HTML is allowed.</p>', 'adammp');
Redux::setHelpSidebar($opt_name, $content);


/*
 * <--- END HELP TABS
 */


/*
 *
 * ---> START SECTIONS
 *
 */

/*
As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
*/

// -> START Panel OPtions

/*
 *
 * --> General Sections Tab
 *
 */

// -> Section Title
Redux::setSection($opt_name, array(
    'id' => 'general_tab',
    'title' => esc_html__('General', 'adammp'),
    'desc' => esc_html__('All the general settings options are listed here.', 'adammp'),
    'icon' => 'el el-wrench',
    'fields' => array(
        // -> Image Logo
        array(
            'id' => 'adammp_theme_logo',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Logo', 'adammp'),
            'compiler' => 'true',
            //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
            'subtitle' => esc_html__('Upload your logo.', 'adammp'),
            'default' => array(
                'url' => ''
            )
        ),
    
           // -> Logo Subheading
        array(
            'id' => 'top_logo_subheading',
            'type' => 'text',
            'title' => esc_html__('Logo Subheading', 'adammp'),
            'subtitle' => esc_html__('Enter your logo subheading.', 'adammp'),
            'required' => array(
                'head_layout', "=", 4
            ),
            'default' => esc_html__( 'Minimal Creative Portfolio', 'adammp' ),
            'placeholder' => 'Enter your logo subheading here'
        ),

        
        // -> Preloader enable or disable option
        array(
            'id' => 'preloader_display',
            'type' => 'switch',
            'title' => esc_html__('Preloader', 'adammp'), 
            'subtitle' => esc_html__( 'Enable or Disable Preloader.', 'adammp' ),
            'default' => '1',
            'on' =>'Enabled',
            'off' =>'Disabled',
            ),
        
       
        // -> Back to top switch        
        array(
            'id' => 'back_top_enable',
            'type' => 'switch',
            'title' => esc_html__('Back to Top', 'adammp'),
            'subtitle' => esc_html__('Enable or Disable Back to Top.', 'adammp'),
            'default' => true,
            'on' =>'Enabled',
            'off' =>'Disabled',
        ),          
    )
));

/*
 *
 * --> Header Sections Tab
 *
 */

// -> Section Title
Redux::setSection($opt_name, array(
    'id' => 'header_tab',
    'title' => esc_html__('Header', 'adammp'),
    'desc' => esc_html__('All the header related options are listed here.', 'adammp'),
    'icon' => 'el el-tasks',
    'fields' => array(
        
        // -> Header background
        array(
            'id' => 'head_bg_color',
            'type' => 'color_rgba',
            'title' => esc_html__('Header Background Color', 'adammp'),
            'subtitle' => esc_html__('Insert your Header Background Color.', 'adammp'),
            'validate' => 'colorrgba',
            'default' => array(
                'color' => '',
                'alpha' => '1'
            ),
            'output' => array(
                'background-color' => 'header.header-area .header-middle-area'
            )
        ),
 
    )
));

/*
 *
 * --> Sidebar Sections Tab
 *
 */

// -> Section Title
Redux::setSection($opt_name, array(
    'id' => 'sidebar_tab',
    'title' => esc_html__('Sidebar', 'adammp'),
    'desc' => esc_html__('All the Sidebar related options are listed here', 'adammp'),
    'icon' => 'el el-pause',
    'fields' => array(
        // -> Blog Sidebar Option
        array(
            'id'       => 'blog_sidebar',
            'type'     => 'image_select',
            'title'    => esc_html__( 'Blog Global Sidebar', 'adammp' ),
            'subtitle' => esc_html__( 'Select your blog page global sidebar here.', 'adammp' ),
            'desc'     => esc_html__( 'This selection will be applied to Blog, Blog Single and Blog Archive Pages.', 'adammp' ),
            //Must provide key => value pairs for radio options
            'options' => array(
                '1'  => array(
                    'alt' => 'No Sidebar',
                    'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                ),
                '2'  => array(
                    'alt' => 'Left Sidebar',
                    'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                ),
                '3' => array(
                    'alt' => 'Right Side',
                    'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                ),
            ),
            'default'  => '1'
            ),
        // -> Blog Sidebar Option
        array(
            'id'       => 'blog_layout',
            'type'     => 'image_select',
            'title'    => esc_html__( 'Select Blog Layout', 'adammp' ),
            'subtitle' => esc_html__( 'Select your blog page layout here.', 'adammp' ),
            'desc'     => esc_html__( 'This selection will be applied to Blog, Blog Single and Blog Archive Pages.', 'adammp' ),
            //Must provide key => value pairs for radio options
            'options' => array(
                '1'  => array(
                    'alt' => '4 columns',
                    'img' => ReduxFramework::$_url . 'assets/img/4-col-portfolio.png'
                ),
                '2'  => array(
                    'alt' => '3 columns',
                    'img' => ReduxFramework::$_url . 'assets/img/3-col-portfolio.png'
                ),
                '3' => array(
                    'alt' => '2 columns',
                    'img' => ReduxFramework::$_url . 'assets/img/2-col-portfolio.png'
                ),
            ),
            'default'  => '2'
            ),
          
    )
));


/*
 *
 * --> Colors Sections Tab
 *
 */

// -> Section Title
Redux::setSection( $opt_name, array(
    'id' => 'colors',
    'title' => esc_html__('Colors', 'adammp'),
    'desc' => esc_html__('All the color options are listed here.', 'adammp'),
    'customizer_width' => '400px',
    'icon' => 'el el-dashboard',    
) );

Redux::setSection($opt_name, array(
    'id' => 'global_colors',
    'title' => esc_html__('Global', 'adammp'),
    'desc' => esc_html__('All the global color options are listed here.', 'adammp'),
    'icon' => '',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields' => array(
        array(
            'id' => 'body_link_color',
            'type' => 'link_color',
            'title' => esc_html__('Link Color', 'adammp'),
            'subtitle' => esc_html__('Insert your link colors.', 'adammp'),
            'default' => array(
                'regular' => '',
                'hover' => '',
                'active' => ''
            ),
            'validate' => 'color',
            'output' => array( 'body.adammp_body a' )
        ),
        // -> Back to top background
        array(
            'id' => 'back_top_bg',
            'type' => 'color',
            'title' => esc_html__('Back to Top Background Color', 'adammp'),
            'subtitle' => esc_html__('Insert Back to Top Background Color.', 'adammp'),
            'required' => array(
                'back_top_enable', "=", 1
            ),
            'default' => '',
            'compiler' => 'true',
            'output'    => array( 'background-color' => 'a.to-top-btn.to-top-show' )
        ),
        
        // -> Back to top hover background
        array(
            'id' => 'back_top_hover_bg',
            'type' => 'color',
            'title' => esc_html__('Back to Top Background Hover Color', 'adammp'),
            'subtitle' => esc_html__('Insert Back to Top Background Hover Color.', 'adammp'),
            'required' => array(
                'back_top_enable', "=", 1
            ),
            'default' => '',
            'compiler' => 'true',
            'output'    => array( 'background-color' => 'a.to-top-btn.to-top-show:hover' )
        ),
        
        // -> Back to top icon
        array(
            'id' => 'back_top_icon',
            'type' => 'link_color',
            'title' => esc_html__('Back to Top Icon Color', 'adammp'),
            'subtitle' => esc_html__('Insert Back to Top Icon Color.', 'adammp'),
            'default' => array(
                'regular' => '', 
                'hover' => '', 
                'active' => '' 
            ),
            'validate' => 'color',
            'required' => array(
                'back_top_enable', "=", 1
            ),
            'output'   => array( 'a.to-top-btn.to-top-show i' ),
        ),
        
    )
) );

Redux::setSection($opt_name, array(
    'id' => 'menu_colors',
    'title' => esc_html__('Menu', 'adammp'),
    'desc' => esc_html__('All the menu color options are listed here.', 'adammp'),
    'icon' => '',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields' => array(        
        
        array(
            'id' => 'menu_rgba_background',
            'type' => 'color_rgba',
            'title' => esc_html__('Menu Background Color', 'adammp'),
            'subtitle' => esc_html__('Insert your Menu Background Color.', 'adammp'),
            'default' => array(
                'color' => '',
                'alpha' => '1'
            ),
            'validate' => 'colorrgba',
            'output' => array(
                'background'    => '.menu-area ul.main-menu', '.header-middle-area ul.sidebar-menu'
            ),
        ),
        array(
            'id' => 'menu_text_link',
            'type' => 'link_color',
            'title' => esc_html__('Menu Text Color', 'adammp'),
            'subtitle' => esc_html__('Insert Menu Text Color.', 'adammp'),
            'default' => array(
                'regular' => '',
                'hover' => '',
                'active' => ''
            ),
            'validate' => 'color',
            'output' => array( '.menu-area ul.main-menu > li > a', 'ul.sidebar-menu > li > a' )
        ),        
        array(
            'id'       => 'menu_border',
            'type'     => 'border',
            'title'    => esc_html__( 'Menu Border Top Color', 'adammp' ),
            'subtitle' => esc_html__( 'Insert Menu Border Top Color.', 'adammp' ),
            'output'   => array( '.menu-area ul.main-menu' ),
            // An array of CSS selectors to apply this font style to
            'desc'     => esc_html__( 'Select the border style and color for the menu top border.', 'adammp' ),
            'default'  => array(
                'border-color'  => '',
                'border-style'  => '',
                'border-bottom'    => '',
            )
        ),        
        array(
            'id' => 'submenu_rgba_background',
            'type' => 'color_rgba',
            'title' => esc_html__('Submenu Background Color', 'adammp'),
            'subtitle' => esc_html__('Insert Submenu Background Color.', 'adammp'),
            'default' => array(
                'color' => '',
                'alpha' => '1'
            ),
            'validate' => 'colorrgba',
            'output' => array( 
                'background'    => '.main-menu li ul.sub-menu' 
            ),      
        ),
        array(
            'id' => 'submenu_text_link',
            'type' => 'link_color',
            'title' => esc_html__('Submenu Text Color', 'adammp'),
            'subtitle' => esc_html__('Insert Submenu Text Color.', 'adammp'),
            'default' => array(
                'regular' => '',
                'hover' => '', 
                'active' => ''
            ),
            'validate' => 'color',
            'output' => array( 'nav.nav_bar ul.sub-menu >li > a' )
        ),        
        array(
            'id'       => 'submenu_border',
            'type'     => 'border',
            'title'    => esc_html__( 'Submenu Border Top Color', 'adammp' ),
            'subtitle' => esc_html__( 'Insert Submenu Border Top Color.', 'adammp' ),
            'output'   => array( '.main-menu li ul.sub-menu' ),
            // An array of CSS selectors to apply this font style to
            'desc'     => esc_html__( 'Select the border style and color for the submenu top border.', 'adammp' ),
            'default'  => array(
                'border-color'  => '',
                'border-style'  => '',
                'border-top'    => '',
            )
        ),
    )
) );

Redux::setSection($opt_name, array(
    'id' => 'content_colors',
    'title' => esc_html__('Content', 'adammp'),
    'desc' => esc_html__('All the content color options are listed here.', 'adammp'),
    'icon' => '',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields' => array(        
        array(
            'id' => 'headings_color',
            'type' => 'color',
            'output' => array( '.h1', '.h2', '.h3', '.h4', '.h5', '.h6', 'body.adammp_body #primary h1', 'body.adammp_body #primary h2', 'body.adammp_body #primary h3', 'body.adammp_body #primary h4', 'body.adammp_body #primary h5', 'body.adammp_body #primary h6' ),
            'title' => esc_html__('Heading Text Color', 'adammp'),
            'subtitle' => esc_html__('Insert Heading Text Color.', 'adammp'),
            'validate' => 'color',
            'default' => '',
        ),
        array(
            'id' => 'paragraph_color',
            'type' => 'color',
            'output' => array( 'body.adammp_body p', 'body.adammp_body li', 'body.adammp_body span' ),
            'title' => esc_html__('Paragraph Text Color', 'adammp'),
            'subtitle' => esc_html__('Insert Paragraph Text Color.', 'adammp'),
            'default' => '',
        ),
        array(
            'id' => 'page-title-background',
            'type' => 'background',
            'output' => array( '.breadcrumb-content h1.page-cat', '.breadcrumb-content h2.page-cat', '.breadcrumb-content h3.page-cat', '.breadcrumb-content h4.page-cat', '.breadcrumb-content h5.page-cat', '.breadcrumb-content h6.page-cat' ),
            'title' => esc_html__('Page Tittle Background', 'adammp'),
            'subtitle' => esc_html__('Insert Page Title Background.', 'adammp'),
            'default' => array(
                'background-color' => ''
            )
        ),        
        array(
            'id' => 'breadcrumbs-background',
            'type' => 'background',
            'output' => array( '.page_links .breadcrumb-list' ),
            'title' => esc_html__('Breadcrumb Area Background', 'adammp'),
            'subtitle' => esc_html__('Insert Breadcrumb Area Background Color or Image.', 'adammp'),
            'default' => array(
                'background-color' => ''
            )
        ),                
        array(
            'id' => 'breadcrumbs_text_link',
            'type' => 'link_color',
            'title' => esc_html__('Breadcrumbs Link Color', 'adammp'),
            'subtitle' => esc_html__('Insert Breadcrumbs Link Color.', 'adammp'),
            'default' => array(
                'regular' => '', 
                'hover' => '', 
                'active' => '' 
            ),
            'validate' => 'color',
            'output' => array( '.page_links .breadcrumb-list > li > a', '.page_links .breadcrumb-list > li > span' ),
        ),            
        array(
            'id' => 'sidebar_bg',
            'type' => 'color_rgba',
            'output'    => array('background-color' => 'aside#sidebar'),
            'title' => esc_html__('Sidebar Widget Background Color', 'adammp'),
            'subtitle' => esc_html__('Insert Sidebar Widget Background Color.', 'adammp'),
            'default'   => array(
                'color'     => '',
                'alpha'     => 1
                ),
            ),
        array(
            'id' => 'sidebar_title',
            'type' => 'color',
            'title' => esc_html__('Sidebar Widget Title Color', 'adammp'),
            'subtitle' => esc_html__('Insert Sidebar Widget Title Color.', 'adammp'),
            'default' => '',
            'validate' => 'color',
            'output' => array( 'body.adammp_body #primary #sidebar h1', 'body.adammp_body #primary #sidebar h2', 'body.adammp_body #primary #sidebar h3', 'body.adammp_body #primary #sidebar h4', 'body.adammp_body #primary #sidebar h4', 'body.adammp_body #primary #sidebar h5', 'body.adammp_body #primary #sidebar h6' ),
        ), 
    )
) );

Redux::setSection($opt_name, array(
    'id' => 'footer_colors',
    'title' => esc_html__('Footer', 'adammp'),
    'desc' => esc_html__('All the footer color options are listed here.', 'adammp'),
    'icon' => '',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields' => array(        
        array(
            'id' => 'footer_bg',
            'type' => 'background',
            'output'    => array( 'footer.site-footer' ),
            'title' => esc_html__('Footer Background Color', 'adammp'),
            'subtitle' => esc_html__('Insert Footer Background Color.', 'adammp'),
            'default' => array(
                'background-color' => ''
                ),
            ),
        array(
            'id' => 'footer_title',
            'type' => 'color',
            'title' => esc_html__('Footer Widget Title Color', 'adammp'),
            'subtitle' => esc_html__('Insert Footer Widget Title Color.', 'adammp'),
            'default' => '', 
            'validate' => 'color',
            'output' => array( 'h2.foot_title' ),
        ),        
        array(
            'id' => 'footer_txt',
            'type' => 'color',
            'title' => esc_html__('Footer Text Color', 'adammp'),
            'subtitle' => esc_html__('Insert Footer Text Color.', 'adammp'),
            'default' => '', 
            'validate' => 'color',
            'output' => array( '.foot-widget p, .foot-widget li, .foot-widget span', '.foot-widget' ),
        ),        
        array(
            'id' => 'footer_links',
            'type' => 'link_color',
            'title' => esc_html__('Footer Link Color', 'adammp'),
            'subtitle' => esc_html__('Insert Footer Link Color.', 'adammp'),
            'default'  => array(
                    'regular'  => '', 
                    'hover'    => '', 
                    'active'   => '',  
                    'important'   => 'true',  
                ),
            'validate' => 'color',
            'output' => array( '.foot-widget a, .foot-widget li a, .foot-widget span' ),
        ),        
        array(
            'id' => 'copyright_bg',
            'type' => 'color_rgba',
            'output'    => array('background-color' => '.footer_copy_right'),
            'title' => esc_html__('Copyright Background Color', 'adammp'),
            'subtitle' => esc_html__('Insert Copyright Background Color.', 'adammp'),
            'default'   => array(
                'color'     => '',
                'alpha'     => 1
                ),
            ),
        array(
            'id' => 'copyright_txt',
            'type' => 'color',
            'title' => esc_html__('Copyright Text Color', 'adammp'),
            'subtitle' => esc_html__('Insert Copyright Text Color.', 'adammp'),
            'default' => '',
            'validate' => 'color',
            'output' => array( '.footer_copy_right p' ),
        ),        
        array(
            'id' => 'copyright_links',
            'type' => 'link_color',
            'title' => esc_html__('Copyright Link Color', 'adammp'),
            'subtitle' => esc_html__('Insert Copyright Link Color.', 'adammp'),
            'default'  => array(
                    'regular'  => '',
                    'hover'    => '',
                    'active'   => '',
                ),
            'validate' => 'color',
            'output' => array( '.footer_copy_right a' ),
        ),        
    )
));

Redux::setSection( $opt_name, array(
        'id'         => 'typography_tab',
        'title'      => esc_html__( 'Typography', 'adammp' ),
        'desc'       => esc_html__( 'All the font options are listed here.', 'adammp' ),
        'icon'   => 'el el-fontsize',
        'fields'     => array(
            array(
                            'id'       => 'body_font',
                            'type'     => 'typography',
                            'title'    => esc_html__( 'Body Font', 'adammp' ),
                            'subtitle' => esc_html__( 'Specify the body font properties.', 'adammp' ),
                            'color'    => false,
                            'compiler' => 'true',
                            'output'    => array('body.adammp_body'),
                            'google'   => true,
                            'letter-spacing' =>true,
                            'preview' =>true,
                            'default'  => array(
                                'font-family' => '',
                                'font-weight' => '',
                                'font-style' => '',
                                'text-align' => '',
                                'font-size' => '',
                                'line-height' => '',
                                'letter-spacing' => '',
                            ),
                        ),
                        array(
                            'id'       => 'title_font',
                            'type'     => 'typography',
                            'title'    => esc_html__( 'Heading Font', 'adammp' ),
                            'subtitle' => esc_html__( 'Specify the title font properties.', 'adammp' ),
                            'color'    =>false,
                            'output' => array( '.h1', '.h2', '.h3', '.h4', '.h5', '.h6', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'body.adammp_body #primary h1', 'body.adammp_body #primary h2', 'body.adammp_body #primary h3', 'body.adammp_body #primary h4', 'body.adammp_body #primary h5', 'body.adammp_body #primary h6' ),
                            'google'   => true,
                            'letter-spacing' =>true,
                            'subsets'  => false,
                            'default'  => array(
                                'font-family' => '',
                                'font-weight' => '',
                                'font-style' => 'normal',
                                'text-align' => '',
                                'font-size' => '',
                                'line-height' => '',
                                'letter-spacing' => '',
                                'important' => true,
                                
                            ),
                        ),
                        array(
                            'id'       => 'menu_font',
                            'type'     => 'typography',
                            'title'    => esc_html__( 'Menu Font', 'adammp' ),
                            'subtitle' => esc_html__( 'Specify the menu font properties.', 'adammp' ),
                            'color'    =>false,
                            'output'    => array( 'nav.nav_bar ul.main-menu li a' ),
                            'google'   => true,
                            'letter-spacing' =>true,
                            'subsets'  => false,
                            'default'  => array(
                                'font-family' => '',
                                'font-weight' => '',
                                'font-style' => '',
                                'text-align' => '',
                                'font-size' => '',
                                'line-height' => '',
                                'letter-spacing' => '',
                            ),
                        ),
        )
    ) );

Redux::setSection( $opt_name, array(
        'id'         => 'footer_tab',
        'title'      => esc_html__( 'Footer', 'adammp' ),
        'desc'       => esc_html__( 'All the footer related options are listed here.', 'adammp' ),
        'icon'   => 'el el-photo',
        'fields'     => array(
                        array(
                            'id' => 'footer_widget_enable',
                            'type' => 'switch',
                            'title' => esc_html__('Footer Widget Area', 'adammp'), 
                            'subtitle' => esc_html__( 'Enable or Disable Footer Widget Area.', 'adammp' ),
                            'default' => '2',
                            'on' =>'Enabled',
                            'off' =>'Disabled',
                            ),
                        array(
                            'id'       => 'footer_columns',
                            'type'     => 'button_set',
                            'title'    => esc_html__( 'Footer Columns.', 'adammp' ),
                            'subtitle' => esc_html__( 'Select number of footer columns.', 'adammp' ),
                            'desc'     => esc_html__( 'Select number of footer columns to be displayed.', 'adammp' ),
                            'required' => array( 'footer_widget_enable', "=", 1 ),
                            //Must provide key => value pairs for radio options
                            'options'  => array(
                                '1' => '2 Column',
                                '2' => '3 Column',
                                '3' => '4 Column'
                            ),
                            'default'  => '3'
                            ),
                        
            // -> Image Logo
        array(
            'id' => 'adammp_footer_logo',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Logo', 'adammp'),
            'compiler' => 'true',
            'subtitle' => esc_html__('Upload your logo.', 'adammp'),
            'default' => array(
                'url' => ''
            )
        ),
        array(
            'id' => 'copyright_txtbox',
            'type' => 'textarea',
            'title' => esc_html__('Copyright Text', 'adammp'), 
            'subtitle' =>esc_html__('Insert Copyright Text', 'adammp'),
            'default' => '',
        ),

            // -> Footer Social Icons Switch
        array(
            'id' => 'top_social_icons',
            'type' => 'switch',
            'title' => esc_html__('Social Icons', 'adammp'),
            'subtitle' => esc_html__('Enable or Disable Footer Social Icons.', 'adammp'),
            'default' => true
            ),
       // -> Facbook Link
        array(
            'id' => 'top_icons_facebook',
            'type' => 'text',
            'title' => esc_html__('Facebook', 'adammp'),
            'subtitle' => esc_html__('Enter your Facebook URL.', 'adammp'),
            'required' => array(
                'top_social_icons', "=", 1
            ),
            'default' => 'https://www.facebook.com',
            'validate' => 'url',
            'placeholder' => 'Enter your Facebook URL here'
        ),
        
        // -> Twitter Link
        array(
            'id' => 'top_icons_twitter',
            'type' => 'text',
            'title' => esc_html__('Twitter', 'adammp'),
            'subtitle' => esc_html__('Enter your Twitter URL.', 'adammp'),
            'required' => array(
                'top_social_icons', "=", 1
            ),
            'default' => 'https://twitter.com',
            'validate' => 'url',
            'placeholder' => 'Enter your Twitter URL here'
        ),
        
        // -> Instagram Link
        array(
            'id' => 'top_icons_instagram',
            'type' => 'text',
            'title' => esc_html__('Instagram', 'adammp'),
            'subtitle' => esc_html__('Enter your Instagram URL.', 'adammp'),
            'required' => array(
                'top_social_icons', "=", 1
            ),
            'default' => 'https://www.instagram.com/',
            'validate' => 'url',
            'placeholder' => 'Enter your Instagram URL here'
        ),
        
        // -> Linkedin Link
        array(
            'id' => 'top_icons_linkedin',
            'type' => 'text',
            'title' => esc_html__('Linkedin', 'adammp'),
            'subtitle' => esc_html__('Enter your Linkedin URL.', 'adammp'),
            'required' => array(
                'top_social_icons', "=", 1
            ),
            'default' => 'https://in.linkedin.com/',
            'validate' => 'url',
            'placeholder' => 'Enter your Linkedin URL here'
        ),
        
        // -> Youtube Link
        array(
            'id' => 'top_icons_youtube',
            'type' => 'text',
            'title' => esc_html__('YouTube', 'adammp'),
            'subtitle' => esc_html__('Enter your YouTube URL.', 'adammp'),
            'required' => array(
                'top_social_icons', "=", 1
            ),
            'default' => 'https://www.youtube.com/',
            'validate' => 'url',
            'placeholder' => 'Enter your YouTube URL here'
        ),
        
        // -> Google+ Link
        array(
            'id' => 'top_icons_googleplus',
            'type' => 'text',
            'title' => esc_html__('Google Plus', 'adammp'),
            'subtitle' => esc_html__('Enter your Google Plus URL.', 'adammp'),
            'required' => array(
                'top_social_icons', "=", 1
            ),
            'default' => 'https://plus.google.com/',
            'validate' => 'url',
            'placeholder' => 'Enter your GooglePlus URL here'
        ),

        )
    ) );

/*
 * <--- END SECTIONS
 */


/*
 *
 * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
 *
 */

/*
 *
 * --> Action hook examples
 *
 */

// If Redux is running as a plugin, this will remove the demo notice and links
add_action( 'redux/loaded', 'remove_demo' );

// Function to test the compiler hook and demo CSS output.
// Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
//add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

// Change the arguments after they've been declared, but before the panel is created
//add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

// Change the default value of a field after it's been set, but before it's been useds
//add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

// Dynamically add a section. Can be also used to modify sections/fields
//add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

/**
 * This is a test function that will let you see when the compiler hook occurs.
 * It only runs if a field    set with compiler=>true is changed.
 * */
if (!function_exists('compiler_action')) {
    function compiler_action($options, $css, $changed_values)
    {
        echo '<h1>The compiler hook has run!</h1>';
        echo "<pre>";
        print_r($changed_values); // Values that have changed since the last save
        echo "</pre>";
        //print_r($options); //Option values
        //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
    }
}

/**
 * Custom function for the callback validation referenced above
 * */
if (!function_exists('redux_validate_callback_function')) {
    function redux_validate_callback_function($field, $value, $existing_value)
    {
        $error   = false;
        $warning = false;
        
        //do your validation
        if ($value == 1) {
            $error = true;
            $value = $existing_value;
        } elseif ($value == 2) {
            $warning = true;
            $value   = $existing_value;
        }
        
        $return['value'] = $value;
        
        if ($error == true) {
            $return['error'] = $field;
            $field['msg']    = 'your custom error message';
        }
        
        if ($warning == true) {
            $return['warning'] = $field;
            $field['msg']      = 'your custom warning message';
        }
        
        return $return;
    }
}

/**
 * Custom function for the callback referenced above
 */
if (!function_exists('redux_my_custom_field')) {
    function redux_my_custom_field($field, $value)
    {
        print_r($field);
        echo '<br/>';
        print_r($value);
    }
}

/**
 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
 * Simply include this function in the child themes functions.php file.
 * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
 * so you must use get_template_directory_uri() if you want to use any of the built in icons
 * */
if (!function_exists('dynamic_section')) {
    function dynamic_section($sections)
    {
        //$sections = array();
        $sections[] = array(
            'title' => esc_html__('Section via hook', 'adammp'),
            'desc' => esc_html__('<p class="description"> This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options. </p>', 'adammp'),
            'icon' => 'el el-paper-clip',
            // Leave this as a blank section, no options just some intro text set above.
            'fields' => array()
        );
        
        return $sections;
    }
}

/**
 * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
 * */
if (!function_exists('change_arguments')) {
    function change_arguments($args)
    {
        //$args['dev_mode'] = true;
        
        return $args;
    }
}

/**
 * Filter hook for filtering the default value of any given field. Very useful in development mode.
 * */
if (!function_exists('change_defaults')) {
    function change_defaults($defaults)
    {
        $defaults['str_replace'] = 'Testing filter hook!';
        
        return $defaults;
    }
}

/**
 * Removes the demo link and the notice of integrated demo from the redux-framework plugin
 */
if (!function_exists('remove_demo')) {
    function remove_demo()
    {
        // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
        if (class_exists('ReduxFrameworkPlugin')) {
            remove_filter('plugin_row_meta', array(
                ReduxFrameworkPlugin::instance(),
                'plugin_metalinks'
            ), null, 2);
            
            // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
            remove_action('admin_notices', array(
                ReduxFrameworkPlugin::instance(),
                'admin_notices'
            ));
        }
    }
}

function newIconFont() {
    // Uncomment this to remove elusive icon from the panel completely
    //wp_deregister_style( 'redux-elusive-icon' );
    //wp_deregister_style( 'redux-elusive-icon-ie7' );
 
    wp_register_style(
        'redux-font-awesome', ADAMMP_THEMEROOT . '/fonts/font-awesome/css/font-awesome.min.css',
        array(),
        time(),
        'all'
    );  
    wp_enqueue_style( 'redux-font-awesome' );
}
// This example assumes the opt_name is set to redux_demo.  Please replace it with your opt_name value.
add_action( 'redux/page/redux_demo/enqueue', 'newIconFont' );
