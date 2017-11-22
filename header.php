<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package adammp
 */

$adammp_url = esc_url( admin_url() );

?>


    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <?php 
    $adammp_preload_display = isset( adam_redux_variable()['preloader_display'] ) ? adam_redux_variable()['preloader_display'] : '';
        
    if ( $adammp_preload_display == '1' ) :
?>

        <div id="preloader-wrapper">
            <div class="preloader-wave-effect"></div>
        </div>

        <?php endif; ?>

        <div class="site-wrapper wrapper">

            <div class="content-wrapper fixed-footer-content">
                <?php 
                            $header_class = 'adam-header';
                        
                            if( is_front_page() || is_page( 'home-2' ) || is_page( 'home-3' )  )  {
                                $header_class = 'adam-header one_page_scroll';
                            } else {
                                $header_class = 'adam-header';
                            } 
                        ?>
                <header class="<?php echo esc_attr( $header_class ); ?>">
                    <nav class="navbar navbar-fixed-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="navbar-header page-scroll">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                                    <span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'nerds' ) ; ?></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>


                                        <?php 
                            //fetching the reux logo url in a variable
                            $adammp_logo = isset( adam_redux_variable()['adammp_theme_logo']['url'] ) ? adam_redux_variable()['adammp_theme_logo']['url'] : '';

                            if( empty($adammp_logo) ): ?>
                                        <h3 class="site_title">
                                            <a class="navbar-brand page-scroll" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                                <?php bloginfo( 'name' ); ?> </a>
                                        </h3>

                                        <?php else : ?>
                                        <a class="navbar-brand page-scroll" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo esc_url( $adammp_logo ); ?>" alt="<?php echo esc_attr_e( 'Logo', 'nerds' ); ?>">
                                </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="collapse navbar-collapse navbar-ex1-collapse">

                                        <?php if ( has_nav_menu( 'primary' ) ) { 
                                        wp_nav_menu( 
                                                array( 
                                                    'theme_location' => 'primary', 
                                                    'menu_class'     => 'nav navbar-nav navbar-right hover-style-one',
                                                    'container'      => false
                                                ) 
                                            );
                                        } else { ?>
                                        <div class="no_menu">
                                            <a href="<?php echo esc_url( $adammp_url.'nav-menus.php' ); ?>">
                                                <?php esc_html_e( 'Click here to add menu','nerds' );?>
                                            </a>
                                        </div>
                                        <?php } ?>

                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>

                    </nav>
                </header>

                <?php
                            $content_class = '';                        

                            if ( is_page( 'home-2' ) || is_page( 'home-3' ) ) {
                                $content_class = 'homepage';
                            } else {
                                $content_class = 'content_area';
                            }                    
                        ?>

                    <div id="content" class="site-content content <?php echo esc_attr( $content_class ); ?>">

                        <?php get_template_part( 'template-parts/breadcrumbs' ); ?>
