<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package adammp
 */

get_header();?>

    <div id="primary" class="content-area">
        <div class="container">
            <main id="main" class="site-main">


                <div id="project_sec" class="single-project-area">
                    <div class="row">
                        <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', get_post_format() );
        ?>

                            <?php

            endwhile; // End of the loop.
            ?>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <?php
get_footer();