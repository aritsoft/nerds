<?php

/**

 * Template part for displaying Audio post format content in content.php.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package adammp

 */



$adammp_audio_link = '';



if( class_exists( 'CMB2' ) ) {

    $adammp_audio_link = get_post_meta( get_the_ID(), 'adam_audio_link', true );

}



?>





    <div <?php post_class( ); ?>>

        <?php    if ( is_single() ) { ?>



        <?php if ( ! empty ( $adammp_audio_link ) ) : ?>

        <div class="embed-responsive embed-responsive-16by9">

            <?php global $wp_embed;

                    echo $wp_embed->run_shortcode('[embed]'. esc_url( $adammp_audio_link ) .'[/embed]');

                ?>

        </div>

        <?php endif; ?>



        <div class="post-content">

            <div class="post-content-inner">



                <div class="post-meta">

                    <span class="post-time"><a href="<?php echo esc_url( get_permalink() ); ?> "> <i class="icon-clock"></i> <?php echo get_the_date(''); ?> </a> </span>

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

        <?php    if ( ! empty ( $adammp_audio_link ) ) : ?>

        <div class="embed-responsive embed-responsive-16by9">

            <?php global $wp_embed;

                                        echo $wp_embed->run_shortcode('[embed]'. esc_url( $adammp_audio_link ) .'[/embed]');

                                    ?>

        </div>

        <?php endif; ?>

        <div class="post-content">

            <div class="post-content-inner">

                <?php the_title( '<h3 class="sec_titl"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );

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

                        <?php esc_html_e ( 'Read More', 'nerds' ); ?>

                    </a>

                </div>

            </div>



        </div>

        <?php } ?>

        <?php

            wp_link_pages( 

                array(

                    'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'nerds' ) . '</span>',

                    'after'       => '</div>',

                    'link_before' => '<span>',

                    'link_after'  => '</span>',

                ) );

            ?>

    </div>

