<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

get_header();?>

    <div id="primary" class="content-area">
        <div class="container">
            <main id="main" class="<?php echo esc_attr( $adammp_main_row );?>">


                <div id="blog_sec" class=" <?php echo esc_attr( $adammp_blog_cont ); ?> ">
                    <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', get_post_format() );
        ?>

                        <div class="post-navigation-wrapper">
                            <div class="post-navigation previous-post">
                                <?php previous_post_link( '%link','<i class="fa fa-angle-left"></i> Previous Post' ); ?>
                            </div>
                            <div class="post-navigation next-post">
                                <?php next_post_link( '%link','Next Post <i class="fa fa-angle-right"></i>' ); ?>
                            </div>
                        </div>

                        <?php

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
                </div>
                <?php
                get_sidebar();
             ?>
            </main>
        </div>
    </div>

    <?php
get_footer();
