<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package adammp
 */

    $adammp_main_row = 'site-main';
    
    $adammp_blog_cont = 'full-width';

$adammp_blog_side = isset( adam_redux_variable()['blog_sidebar'] ) ? adam_redux_variable()['blog_sidebar'] : '';

if ( $adammp_blog_side == '3' && is_active_sidebar( 'blog-sidebar-right' ) )  {
    
    $adammp_main_row = 'row site-main';
    
    $adammp_blog_cont = 'col-lg-9 col-md-8 col-sm-12 side_sec pull-left';
    
} elseif ( $adammp_blog_side == '2' && is_active_sidebar( 'blog-sidebar-left' ) )  {
    
    $adammp_main_row = 'row site-main';
    
    $adammp_blog_cont = 'col-lg-9 col-md-8 col-sm-12 side_sec pull-right';
    
} elseif ( $adammp_blog_side == '1' ) {
    
    $adammp_main_row = 'site-main';
    
    $adammp_blog_cont = 'full-width';
    
} else {
    
    $adammp_main_row = 'site-main';
    
    $adammp_blog_cont = 'full-width';
    
} 

get_header(); ?>

    <div id="primary" class="content-area">
        <div class="container">
            <main id="main" class="<?php echo esc_attr( $adammp_main_row );?>">


                <div id="blog_sec" class=" <?php echo esc_attr( $adammp_blog_cont ); ?> ">

                    <?php
		if ( have_posts() ) : ?>

                        <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
                </div>

                <?php get_sidebar(); ?>

            </main>
        </div>
    </div>

    <?php
get_footer();
