<?php

/**

 * Template part for displaying standard post format content in content.php.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package adammp

 */



?>



    <div <?php post_class( ); ?>>



        <?php if ( is_single() ) { ?>

        <div class="post-thumbnail">

            <?php if ( has_post_thumbnail() ) : ?>

            <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive img-hover' ) ); ?>

            <?php endif; ?>

        </div>



        <div class="post-content">

            <div class="post-content-inner">



                <div class="post-meta">

                    <span class="post-time"><a href="<?php echo esc_url( get_permalink() ); ?> "> <i class="icon-clock"></i> <?php echo get_the_date(''); ?></a></span>

                    <span class="post-comment"><i class="icon-flag"></i><?php the_category( ', ' ); ?></span>

                </div>



                <div class="blog_desc">

                    <?php the_content(); ?>

                    <?php if ( has_tag() ) : ?>



                    <p class="blog_tags">

                        <span class="list_label"> <?php esc_html_e( 'Tags:', 'nerds' );?> </span>

                        <?php the_tags( ' ', ' , ' ); ?>

                    </p>

                    <?php endif; ?>

                </div>

            </div>

        </div>

        <?php    

                } else { ?>

        <div class="post-thumbnail">

            <?php if ( has_post_thumbnail() ) : ?>

            <a href="<?php esc_url( the_permalink() ); ?>" title="<?php esc_attr( the_title_attribute() ); ?>" class="post-thumbnail">

                <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive img-hover' ) ); ?>

            </a>

            <?php endif; ?>

        </div>

        <div class="post-content">

            <div class="post-content-inner">

                <?php   the_title( '<h3 class="sec_titl"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );

                ?>

                <ul class="meta-info">

                    <li>

                        <a href="<?php echo esc_url( get_permalink() ); ?> ">

                            <?php echo get_the_date(''); ?>

                        </a>

                    </li>

                </ul>

                <p class="sec_desc">

                    <?php echo get_the_excerpt(); ?>

                </p>



            </div>



            <div class="post-footer-meta clearfix">

                <ul class="post-action-btn">

                    <li><a href="<?php esc_url( the_author_link() ); ?>"><i class="icon-refresh"></i></a></li>

                    <li><a href="<?php esc_url( comments_link() ); ?>"><i class="icon-chat"></i></a></li>

                </ul>

                <div class="read-more-wrapper">

                    <a href="<?php the_permalink(); ?>" class="read-more">

                        <?php esc_html_e( 'Read More', 'nerds' ); ?>

                    </a>

                </div>

            </div>

        </div>

        <?php } ?>



        <?php

wp_link_pages( array(

                                'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'nerds' ) . '</span>',

                                'after'       => '</div>',

                                'link_before' => '<span>',

                                'link_after'  => '</span>',

                            ) );

?>

    </div>

