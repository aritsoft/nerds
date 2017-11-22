<?php

/**

 * Template part for displaying breadcrumbs.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package adammp

 */





    if( is_home() ){

        $get_post_id = get_option('page_for_posts');

    } else {

        $get_post_id = get_the_ID();

    }





?>



    <?php if ( is_front_page() || is_page( 'home-3' ) || is_page( 'home-2' ) ) : ?>

    <p class="hidden">

        <?php esc_html_e( 'No Breadcrumbs', 'nerds' ); ?>

    </p>

    <?php elseif ( is_home() || is_page() || is_archive() || is_single() || is_search() ) : ?>

    <div class="breadcrumb-area breadcrumb-style-3 gray-bg ptb-100">

        <div class="container">

            <div class="row">

                <div class="col-xs-12">

                    <div class="breadcrumb-content text-center">

                        <h2 class="page-cat">

                            <?php

                                if ( is_home() || is_page() || is_archive() ) {

                                    wp_title( false ); 

                                } elseif ( is_search() ) {

                                    printf( esc_html__( 'Search Results for: %s', 'nerds' ), '<span>' . esc_html ( get_search_query(), 'nerds' ) . '</span>' );

                                } else { 

                                    wp_title( false );

                                }

                                ?>

                        </h2>

                        <div class="page_links">

                            <?php adammp_breadcrumbs(); ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <?php endif; ?>

