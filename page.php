<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package adammp
 */

get_header(); ?>

<div id="primary" class="content-area">
      
    <div class="container">
        <main id="main" class="site-main">

         
            <div id="<?php if( is_home() ) { 
            echo 'blog_section' ;
            } elseif( is_front_page() ) { 
            echo 'home_section' ;                 
            } else { 
               echo 'content_section' ;
            }   
        ?>" class="full-width" >
                    <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
                </div>
                
                
            </main>
            
    </div>
</div>


    <?php
get_footer();