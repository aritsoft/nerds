<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package adammp
 */

?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="panel panel-default">
            <div class="panel-body search_content">
                <?php the_title( sprintf( '<h3 class="sec_titl"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

                <div class="blog_feat">
                    <p class="search_meta">
                        <?php adammp_posted_on(); ?>
                    </p>
                </div>

                <div class="blog_desc">
                    <?php the_excerpt(); ?>
                </div>

            </div>
        </div>
    </article>
