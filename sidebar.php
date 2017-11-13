<?php
/**
 * The sidebar containing the main widget area.
 * 
 * It is located in the blog page right side
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package adammp
 */

$adammp_url = esc_url( admin_url() );

$adammp_blog_side = isset( adam_redux_variable()['blog_sidebar'] ) ? adam_redux_variable()['blog_sidebar'] : '';

?>

    <aside id="sidebar" class="widget-area col-lg-3 col-md-4 col-sm-12">
        <?php
        if ( $adammp_blog_side == '3' && is_active_sidebar( 'blog-sidebar-right' ) ) {
            
            dynamic_sidebar( 'blog-sidebar-right' );
            
        } elseif ( $adammp_blog_side == '2' && is_active_sidebar( 'blog-sidebar-left' ) ) {
            
            dynamic_sidebar( 'blog-sidebar-left' );
            
        } elseif ( $adammp_blog_side == '1' ) { ?>

            <p class="hidden">
                <?php esc_html_e( 'No Sidebar', 'adammp' ); ?> </p>

            <?php } else { ?>

            <p class="hidden">
                <?php esc_html_e( 'No Sidebar', 'adammp' ); ?> </p>

            <?php } ?>


    </aside>
