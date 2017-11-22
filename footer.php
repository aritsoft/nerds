<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package adammp

 */



$adammp_url = esc_url( admin_url() );



?>
</div>
</div>

<footer id="colophon" class="footer-area fixed-footer footer-style-two">
  <?php 
    $adammp_footer_display = isset( adam_redux_variable()['footer_widget_enable'] ) ? adam_redux_variable()['footer_widget_enable'] : '';
    $adammp_footer_cols = isset( adam_redux_variable()['footer_columns'] ) ? adam_redux_variable()['footer_columns'] : '';
    $adammp_foot_col = 'col-md-3';    
    if ( $adammp_footer_cols == '3' )  {
        $adammp_foot_col = 'col-md-3';
    } elseif ( $adammp_footer_cols == '2' )  {
        $adammp_foot_col = 'col-md-4';
    } elseif ( $adammp_footer_cols == '1' ) {
        $adammp_foot_col = 'col-md-6';
    }    
	if ( $adammp_footer_display == '1' ) :
    ?>
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="foot-widget <?php echo esc_attr( $adammp_foot_col ); ?> ">
          <?php
			if ( is_active_sidebar( 'footer-widget-1' ) ) : 

				dynamic_sidebar( 'footer-widget-1' );

			endif;

		?>
        </div>
        <?php if ( $adammp_footer_cols == '3' || $adammp_footer_cols == '2' || $adammp_footer_cols == '1' ) : ?>
        <div class="foot-widget <?php echo esc_attr( $adammp_foot_col ); ?> ">
          <?php

                                if ( is_active_sidebar( 'footer-widget-2' ) ) : 

                                    dynamic_sidebar( 'footer-widget-2' );

                                endif;

                            ?>
        </div>
        <?php endif; ?>
        <?php if ( $adammp_footer_cols == '3' || $adammp_footer_cols == '2' ) : ?>
        <div class="foot-widget <?php echo esc_attr( $adammp_foot_col ); ?> ">
          <?php

                                if ( is_active_sidebar( 'footer-widget-3' ) ) : 

                                    dynamic_sidebar( 'footer-widget-3' );

                                endif;

                            ?>
        </div>
        <?php endif; ?>
        <?php if ( $adammp_footer_cols == '3' ) : ?>
        <div class="foot-widget <?php echo esc_attr( $adammp_foot_col ); ?> ">
          <?php

                                if ( is_active_sidebar( 'footer-widget-4' ) ) : 

                                    dynamic_sidebar( 'footer-widget-4' );

                                endif;

                            ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php else : ?>
  <p class="hidden"> <?php echo esc_html_e( 'No footer widgets','nerds' );?> </p>
  <?php endif; ?>
  <?php

    $adammp_footer_logo = isset( adam_redux_variable()['adammp_footer_logo']['url'] ) ? adam_redux_variable()['adammp_footer_logo']['url'] : '';

        

    $adammp_social_icons = isset( adam_redux_variable()['top_social_icons'] ) ? adam_redux_variable()['top_social_icons'] : '';

        

    //Getting social links from theme panel in a variable

    $adammp_fb_icon  = isset( adam_redux_variable()['top_icons_facebook'] ) ? adam_redux_variable()['top_icons_facebook'] : ''; //facebook



    $adammp_tweet_icon  = isset( adam_redux_variable()['top_icons_twitter'] ) ? adam_redux_variable()['top_icons_twitter'] : ''; //twitter



    $adammp_inst_icon  = isset( adam_redux_variable()['top_icons_instagram'] ) ? adam_redux_variable()['top_icons_instagram'] : ''; //instagram



    $adammp_linked_icon  = isset( adam_redux_variable()['top_icons_linkedin'] ) ? adam_redux_variable()['top_icons_linkedin'] : ''; //linkedin



    $adammp_ytube_icon  = isset( adam_redux_variable()['top_icons_youtube'] ) ? adam_redux_variable()['top_icons_youtube'] : ''; //youtube



    $adammp_gplus_icon  = isset( adam_redux_variable()['top_icons_googleplus'] ) ? adam_redux_variable()['top_icons_googleplus'] : ''; //googleplus 

        

    $adammp_copy_position = isset( adam_redux_variable()['copyright_position'] ) ? adam_redux_variable()['copyright_position'] : '';

        

    $adammp_foot_copy      = 'col-sm-6 pull-left';

        

    $adammp_foot_copy_alt  = 'col-sm-6 pull-right';

        

        

    if ( $adammp_copy_position == '3' )  {



        $adammp_foot_copy      = 'col-sm-6 pull-right';

        

        $adammp_foot_copy_alt  = 'col-sm-6 pull-left';



    } elseif ( $adammp_copy_position == '1' )  {



        $adammp_foot_copy      = 'col-sm-6 pull-left';

        

        $adammp_foot_copy_alt  = 'col-sm-6 pull-right';



    } elseif ( $adammp_copy_position == '2' )  {



        $adammp_foot_copy      = 'copy_txt text-center';

        

        $adammp_foot_copy_alt  = 'copy_txt_alt text-center';



    }  else {

        

        $adammp_foot_copy      = 'col-sm-6 pull-left';

        

        $adammp_foot_copy_alt  = 'col-sm-6 pull-right';

    }    
	$copyrightText  = isset( adam_redux_variable()['copyright_txtbox'] ) ? adam_redux_variable()['copyright_txtbox'] : '';   

        

?>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center">
            <div class="footer-logo">
              <?php if( empty($adammp_footer_logo) ): ?>
              <h3> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?> </a> </h3>
              <?php else : ?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php echo esc_url( $adammp_footer_logo ); ?>" alt="<?php echo esc_attr_e( 'Logo', 'nerds' ); ?>"> </a>
              <?php endif; ?>
            </div>
            <div class="footer-fun-text">
              <p>
                <?php esc_html_e( 'our social profile links.','nerds' );?>
              </p>
            </div>
            <?php if ( $adammp_social_icons == '1' ) : ?>
            <div class="social-bookmark-2-wrapper">
              <ul class="social-bookmark-2">
                <?php if( ! empty( $adammp_fb_icon ) ): ?>
                <li class="fb"> <a href="<?php echo esc_url( $adammp_fb_icon ); ?>"> <i class="fa fa-facebook"></i> </a> </li>
                <?php endif ?>
                <?php if( ! empty( $adammp_tweet_icon ) ): ?>
                <li class="tweet"> <a href="<?php echo esc_url( $adammp_tweet_icon ); ?>"> <i class="fa fa-twitter"></i> </a> </li>
                <?php endif ?>
                <?php if( ! empty( $adammp_inst_icon ) ): ?>
                <li class="insta"> <a href="<?php echo esc_url( $adammp_inst_icon ); ?>"> <i class="fa fa-instagram"></i> </a> </li>
                <?php endif ?>
                <?php if( ! empty( $adammp_gplus_icon ) ): ?>
                <li class="gplus"> <a href="<?php echo esc_url( $adammp_gplus_icon ); ?>"> <i class="fa fa-google-plus"></i> </a> </li>
                <?php endif ?>
                <?php if( ! empty( $adammp_linked_icon ) ): ?>
                <li class="linkd"> <a href="<?php echo esc_url( $adammp_linked_icon ); ?>"> <i class="fa fa-linkedin"></i> </a> </li>
                <?php endif ?>
                <?php if( ! empty( $adammp_ytube_icon ) ): ?>
                <li class="ytube"> <a href="<?php echo esc_url( $adammp_ytube_icon ); ?>"> <i class="fa fa-youtube"></i> </a> </li>
                <?php endif ?>
              </ul>
            </div>
            <?php endif ; ?>
            <div class="footer_menu">
              <?php 
			  if ( has_nav_menu( 'footer_menu' ) ) { 
					wp_nav_menu( 	
						array( 
	
							'theme_location' => 'footer_menu', 
	
							'menu_class'     => 'footer-menu text-center hover-style-one',
	
							'container'      => false
	
						) 
	
					); 
	
				} else { ?>
              	<div class="no_menu"> 
              		<a href="<?php echo esc_url( $adammp_url.'nav-menus.php' ); ?>"><?php esc_html_e( 'Click here to add footer menu','nerds' );?></a> 
                </div>
              <?php } ?>
            </div>
            <div class="footer-fun-text">
            	<p><?php echo $copyrightText ;?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php $adammp_back_top_display = isset( adam_redux_variable()['back_top_enable'] ) ? adam_redux_variable()['back_top_enable'] : ''; ?>
<?php if ( $adammp_back_top_display == '1' ) : ?>
<div class="backtop"> <a id="back-to-top" class="to-top-btn" href="#"><i class="fa fa-angle-up"></i></a> </div>
<?php endif; ?>
</div>
<?php wp_footer(); ?>
</body></html>