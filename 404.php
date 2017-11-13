<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package adammp
 */

get_header(); ?>

	<div class="content-area p0">
	    <div class="breadcrumb-area gray-bg breadcrumbs-style-four ptb-50">
       <div class="container">
                        <div class="row">
                        <div class="col-md-8 col-sm-6 col-xs-12">
                                <div class="breadcrumb-content">
                                    <h2 class="page-cat"> <?php esc_html_e('Not Found', 'adammp');?></h2>
                                    <p><?php esc_html_e('Page not found.', 'adammp');?></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <?php adammp_breadcrumbs(); ?>                                
                            </div>
        
        </div>
        </div>
        </div>
		<main id="main" class="site-main">
       <div class="adam-standard-row white-bg ptb-225">
                    <div class="container">
                        <div class="row">
                        	<div class="col-md-12">
                        		<div class="not-found-content text-center">
                        			<h1><?php esc_html_e( '404', 'adammp' ); ?></h1>
                        			<h3 class="mb-40"> <?php esc_html_e( 'Ooopps.! the page you were looking for, couldnt be found.', 'adammp' ); ?></h3>
                        			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button medium"><?php esc_html_e( 'Back to Home', 'adammp' ); ?> </a>
                        		</div>
                        	</div>
                        </div>
                    </div>
                </div> 

		</main>
	</div>

<?php
get_footer();
