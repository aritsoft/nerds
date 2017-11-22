<?php

/**

 * Template part for displaying Image post format content in content.php.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package adammp

 */



if( class_exists( 'cmb2' ) ) {



    $adammp_port_style = get_post_meta( get_the_ID(), 'adam_port_style', true );



    $adammp_client_name = get_post_meta( get_the_ID(), 'adam_client_name', true );



    $adammp_project_date = get_post_meta( get_the_ID(), 'adam_project_date', true );



    $adammp_project_skills = get_post_meta( get_the_ID(), 'adam_project_skills', true );



    $adammp_project_demo = get_post_meta( get_the_ID(), 'adam_project_demo', true );



    $adammp_port_gallery = get_post_meta( get_the_ID(), 'adam_port_gallery', 1 );



    $img_size  = 'full';



}



?>

    <div class="row">

        <?php if($adammp_port_style == 'value1'):?>



        <div class="col-lg-12 col-md-12">

            <div class="single-port-img single-project-gallery-slider">



                <?php



                if ( !empty( $adammp_port_gallery ) ) :



            ?>



                    <?php foreach ( (array) $adammp_port_gallery as $attachment_id => $attachment_url ): ?>



                    <div class="item">



                        <?php echo



                                wp_get_attachment_image( $attachment_id, $img_size );



                            ?>



                    </div>



                    <?php ?>



                    <?php endforeach; ?>



                    <?php endif;  ?>



            </div>

        </div>



        <div class="col-lg-3 col-md-4 col-sm-4">

            <div class="project-meta-wrapper">

                <h4>

                    <?php esc_html_e( 'information', 'nerds' ); ?> </h4>

                <ul class="single-portfolio-meta">

                    <?php if ( !empty ( $adammp_client_name ) ) : ?>

                    <li><i class="fa fa-user"></i><span> <?php esc_html_e( 'Client:', 'nerds' ); ?> </span>

                        <?php echo esc_html( $adammp_client_name, 'nerds' ); ?>

                    </li>

                    <?php endif; ?>

                    <?php if ( !empty ( $adammp_project_date ) ) : ?>

                    <li><i class="fa fa-calendar"></i><span> <?php esc_html_e( 'Date:', 'nerds' ); ?> </span>

                        <?php echo esc_html( $adammp_project_date, 'nerds' ); ?>

                    </li>

                    <?php endif; ?>

                    <?php if ( !empty ( $adammp_project_skills ) ) : ?>

                    <li><i class="fa fa-coffee"></i><span> <?php esc_html_e( 'Skills:', 'nerds' ); ?> </span>

                        <?php echo esc_html( $adammp_project_skills, 'nerds' ); ?>

                    </li>

                    <?php endif; ?>

                    <?php if ( !empty ( $adammp_project_demo ) ) : ?>

                    <li><i class="fa fa-link"></i><span> <?php esc_html_e( 'Demo:', 'nerds' ); ?> </span>

                        <a href="<?php echo esc_url( $adammp_project_demo ); ?>" target="_blank">

                            <?php esc_html_e( 'Live Link', 'nerds' ); ?>

                        </a>

                    </li>

                    <?php endif; ?>

                </ul>

            </div>

        </div>



        <div class="col-lg-9 col-md-8 col-sm-8">

            <div class="single-project-description">

                <?php the_title( '<h2 class="single-project-title">', '</h2>' ); 

            the_content(); ?>

            </div>



            <div class="post-navigation-wrapper">

                <?php if ( get_previous_post() ): ?>

                <div class="post-navigation previous-post">

                    <i class="fa fa-angle-left"></i>

                    <?php previous_post_link( '%link','Previous Project' ); ?>

                </div>

                <?php endif; ?>

                <?php if ( get_next_post() ): ?>

                <div class="post-navigation next-post">

                    <?php next_post_link( '%link','Next Project' ); ?><i class="fa fa-angle-right"></i>

                </div>

                <?php endif;?>

            </div>

        </div>





        <?php elseif( $adammp_port_style == 'value2' || $adammp_port_style == 'value3' ) :?>



        <div class="col-md-12">

            <div class="single-port-img single-project-gallery-slider">



                <?php



                if ( !empty( $adammp_port_gallery ) ) :



            ?>



                    <?php foreach ( (array) $adammp_port_gallery as $attachment_id => $attachment_url ): ?>



                    <div class="item">



                        <?php echo



                                wp_get_attachment_image( $attachment_id, $img_size );



                            ?>



                    </div>



                    <?php ?>



                    <?php endforeach; ?>



                    <?php endif;  ?>



            </div>

            <div class="single-project-description">

                <?php the_title( '<h2 class="single-project-title">', '</h2>' ); ?>



                <div class="post-meta">

                    <span class="post-time"> <a href="<?php echo esc_url( get_permalink() ); ?> "><i class="icon-clock"></i> <?php echo get_the_date(''); ?> </a> </span>

                    <span class="post-comment"><i class="icon-flag"></i> <?php echo get_the_term_list($post->ID, 'portfolio_category', '', ', ' ); ?> </span>

                </div>



                <?php the_content(); ?>

            </div>



            <div class="post-navigation-wrapper">

                <?php if ( get_previous_post() ): ?>

                <div class="post-navigation previous-post">

                    <i class="fa fa-angle-left"></i>

                    <?php previous_post_link( '%link','Previous Project' ); ?>

                </div>

                <?php endif; ?>

                <?php if ( get_next_post() ): ?>

                <div class="post-navigation next-post">

                    <?php next_post_link( '%link','Next Project' ); ?><i class="fa fa-angle-right"></i>

                </div>

                <?php endif;?>

            </div>

        </div>



        <?php else:?>

        <div class="col-lg-12 col-md-12">

            <div class="single-port-img">

                <?php if ( has_post_thumbnail() ) : ?>

                <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive img-hover' ) ); ?>

                <?php endif; ?>

            </div>

        </div>



        <div class="col-lg-3 col-md-4 col-sm-4">

            <div class="project-meta-wrapper">

                <h4>

                    <?php esc_html_e( 'information', 'nerds' ); ?> </h4>

                <ul class="single-portfolio-meta">

                    <?php if ( !empty ( $adammp_client_name ) ) : ?>

                    <li><i class="fa fa-user"></i><span> <?php esc_html_e( 'Client:', 'nerds' ); ?> </span>

                        <?php echo esc_html( $adammp_client_name, 'nerds' ); ?>

                    </li>

                    <?php endif; ?>

                    <?php if ( !empty ( $adammp_project_date ) ) : ?>

                    <li><i class="fa fa-calendar"></i><span> <?php esc_html_e( 'Date:', 'nerds' ); ?> </span>

                        <?php echo esc_html( $adammp_project_date, 'nerds' ); ?>

                    </li>

                    <?php endif; ?>

                    <?php if ( !empty ( $adammp_project_skills ) ) : ?>

                    <li><i class="fa fa-coffee"></i><span> <?php echo esc_html_e( 'Skills:', 'nerds' ); ?> </span>

                        <?php echo esc_html( $adammp_project_skills, 'nerds' ); ?>

                    </li>

                    <?php endif; ?>

                    <?php if ( !empty ( $adammp_project_demo ) ) : ?>

                    <li><i class="fa fa-link"></i><span> <?php esc_html_e( 'Demo:', 'nerds' ); ?> </span>

                        <a href="<?php echo esc_url( $adammp_project_demo ); ?>" target="_blank">

                            <?php esc_html_e( 'Live Link', 'nerds' ); ?>

                        </a>

                    </li>

                    <?php endif; ?>

                </ul>

            </div>

        </div>



        <div class="col-lg-9 col-md-8 col-sm-8">

            <div class="single-project-description">

                <?php the_title( '<h2 class="single-project-title">', '</h2>' ); 

                                    the_content(); ?>

            </div>



            <div class="post-navigation-wrapper">

                <?php if ( get_previous_post() ): ?>

                <div class="post-navigation previous-post">

                    <i class="fa fa-angle-left"></i>

                    <?php previous_post_link( '%link','Previous Project' ); ?>

                </div>

                <?php endif; ?>

                <?php if ( get_next_post() ): ?>

                <div class="post-navigation next-post">

                    <?php next_post_link( '%link','Next Project' ); ?><i class="fa fa-angle-right"></i>

                </div>

                <?php endif;?>

            </div>

        </div>





        <?php endif;?>

    </div>

