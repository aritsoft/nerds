<?php

 



 function adammp_ocdi_import_files() {

  return array(

    array(

      'import_file_name'             => 'Adam Theme Demo Import',

      'categories'                   => array( 'Category 1' ),

      'local_import_file'            => trailingslashit( get_template_directory() ) . 'ocdi/demo-content.xml',

      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'ocdi/widgets.wie',

      'local_import_redux'           => array(

        array(

          'file_path'   => trailingslashit( get_template_directory() ) . 'ocdi/redux.json',

          'option_name' => 'redux_option_name',

        ),

      ),

      'import_preview_image_url'     => trailingslashit( get_template_directory() ) . 'ocdi/preview_image.png',

      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'nerds' ),

        'preview_url'                  => 'http://www.your_domain.com/my-demo-1',

    ),

  );

}

add_filter( 'pt-ocdi/import_files', 'adammp_ocdi_import_files' );





function adammp_ocdi_after_import_setup() {

    // Assign menus to their locations.

    $main_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );

    $footer_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );

   

    set_theme_mod( 'nav_menu_locations', array(

            'primary' => $main_menu->term_id,

            'footer_menu' => $footer_menu->term_id,

        )

    );

	



    // Assign front page and posts page (blog page).

    $front_page_id = get_page_by_title( 'Home' );

    $blog_page_id  = get_page_by_title( 'Blog Default' );



    update_option( 'show_on_front', 'page' );

    update_option( 'page_on_front', $front_page_id->ID );

    update_option( 'page_for_posts', $blog_page_id->ID );

}

add_action( 'pt-ocdi/after_import', 'adammp_ocdi_after_import_setup' );









add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

