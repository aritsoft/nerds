<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

            ?>

                            <div class="pagin">
                                <?php the_posts_pagination( array(
                        'mid_size' => 2,
                        'prev_text' => __( '<i class="fa fa-long-arrow-left"></i>', 'nerds' ),
                        'next_text' => __( '<i class="fa fa-long-arrow-right"></i>', 'nerds' ),
                        'type'      => 'list',    
                    ) ); ?>
                            </div>
                            <?php    
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
