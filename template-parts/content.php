<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package adammp
 */
?>
    <?php 
    $adammp_blog_side = isset( adam_redux_variable()['blog_sidebar'] ) ? adam_redux_variable()['blog_sidebar'] : '';
    
    $adammp_blog_layout = isset( adam_redux_variable()['blog_layout'] ) ? adam_redux_variable()['blog_layout'] : '';
    
    $adammp_cols ="col-md-6";
 
     if ( $adammp_blog_layout == '1' ) :  
    
       $adammp_cols ="col-md-3";
    
    elseif ( $adammp_blog_layout == '2' ) :
    
        $adammp_cols ="col-md-4";
    
    else :
        
        $adammp_cols ="col-md-6";
?>

    <?php endif; ?>

    <?php
        if ( is_single() ) { ?>
        <div class="single-post single-blog-post-area">
            <?php } else { ?>
            <div class="<?php echo esc_attr( $adammp_cols ) ;  ?> post-grid-item">
                <?php } ?>

                <article id="post-<?php the_ID(); ?>" <?php esc_attr( post_class( 'blog-post' ) ); ?>>


                    <div class="post_section">
                        <?php            
                if ( has_post_format('image') ) {
                   // stuff to display the Image format post here
                    get_template_part( 'template-parts/post-format', 'image' );
                    
                } elseif ( has_post_format('video') ) {
                   // stuff to display the Image format post here
                    get_template_part( 'template-parts/post-format', 'video' );
                    
                } elseif ( has_post_format('audio') ) {
                   // stuff to display the Image format post here
                    get_template_part( 'template-parts/post-format', 'audio' );
                    
                } elseif ( get_post_type( get_the_ID() ) == 'portfolio' ) {
                   // stuff to display the Image format post here
                    get_template_part( 'template-parts/post-type', 'portfolio' );
                    
                } else if ( false == get_post_format() ) {
                   // code to display the normal format post here
                    get_template_part( 'template-parts/post-format', 'standard' );
                } elseif ( get_post_type() != 'post' ) { ?>
                        <div class="entry-content">
                            <?php
                            /* translators: %s: Name of current post */
                            the_content( sprintf(
                                esc_html__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'adammp' ),
                                the_title( '<span class="screen-reader-text">', '</span>', false )
                            ) );

                            wp_link_pages( array(
                                'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'adammp' ) . '</span>',
                                'after'       => '</div>',
                                'link_before' => '<span>',
                                'link_after'  => '</span>',
                            ) );
                        ?>
                        </div>
                        <?php } else { ?>
                        <div class="post-single-content">
                            <?php
                            /* translators: %s: Name of current post */
                            the_content( sprintf(
                                esc_html__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'adammp' ),
                                the_title( '<span class="screen-reader-text">', '</span>', false )
                            ) );

                            wp_link_pages( array(
                                'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'adammp' ) . '</span>',
                                'after'       => '</div>',
                                'link_before' => '<span>',
                                'link_after'  => '</span>',
                            ) );
                        ?>
                        </div>
                        <?php } ?>
                    </div>

                </article>

                <?php
                if ( is_single() ) { ?>
            </div>
            <?php } else { ?>
        </div>
        <?php } ?>
        <!-- #post-## -->
