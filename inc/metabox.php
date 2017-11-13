<?php
/**
 * Custom Metabox for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package adammp
 */


add_filter( 'cmb2_admin_init', 'adammp_register_meta_boxes' );
function adammp_register_meta_boxes( ) {
    $prefix = 'adam_';
    // Video Post Metabox
    $video_post_meta = new_cmb2_box( array(
        'id'         => 'video_post',
        'title'      => esc_html__( 'Video Post Options', 'adammp' ),
        'object_types' => array( 'post' ),
        'context'    => 'normal',
        'priority'   => 'high',
    ) );
    $video_post_meta->add_field( array(
        'name'       => esc_html__( 'Video Post Link', 'adammp' ),
        'desc'       => esc_html__( 'You can add youtube or vimeo link here. This field will only work when video post format is selected', 'adammp' ),
        'id'         => $prefix . 'video_link',
        'type'       => 'oembed',
    ) );
                        
                        
    // Audio Post Metabox
    $audio_post_meta = new_cmb2_box( array(
        'id'         => 'audio_post',
        'title'      => esc_html__( 'Audio Post Options', 'adammp' ),
        'object_types' => array( 'post' ),
        'context'    => 'normal',
        'priority'   => 'high',
    ) );
    $audio_post_meta->add_field( array(
        'name'       => esc_html__( 'Audio Post Link', 'adammp' ),
        'desc'       => esc_html__( 'This field will only work when audio post format is selected', 'adammp' ),
        'id'         => $prefix . 'audio_link',
        'type'       => 'oembed',
    ) );                                    

    // Portfolio Layout
    $port_layout_meta = new_cmb2_box( array(
        'id'         => 'port_layout',
        'title'      => esc_html__( 'Portfolio Single Layout', 'adammp' ),
        'object_types' => array( 'portfolio' ),
        'context'    => 'normal',
        'priority'   => 'high',
    ) );
    $port_layout_meta->add_field( array(
        'name'       => esc_html__( 'Portfolio Single Layout', 'adammp' ),
        'desc'       => esc_html__( 'Select the single portfolio page layout', 'adammp' ),
        'id'         => $prefix . 'port_style',
        'type'       => 'select',
        'options'     => array(
            'value1' => esc_html__( 'Layout 1', 'adammp' ),
            'value2' => esc_html__( 'Layout 2', 'adammp' ),
            'value3' => esc_html__( 'Layout 3', 'adammp' ),
        ),
    ) );                                     
    // Portfolio Layout
    $port_slider_meta = new_cmb2_box( array(
        'id'         => 'port_silder',
        'title'      => esc_html__( 'Portfolio Single Gallery', 'adammp' ),
        'object_types' => array( 'portfolio' ),
        'context'    => 'normal',
        'priority'   => 'high',
    ) );
    $port_slider_meta->add_field( array(
        'name'       => esc_html__( 'Portfolio Single Gallery Images', 'adammp' ),
        'desc'       => esc_html__( 'Select the single portfolio Gallery Images', 'adammp' ),
        'id'         => $prefix . 'port_gallery',
        'type' => 'file_list',
        'query_args' => array( 'type' => 'image' ), // Only images attachment
    ) );                                      
    
    // Portfolio info
    $port_info_meta = new_cmb2_box( array(
        'id'         => 'port_info',
        'title'      => esc_html__( 'Additional Portfolio Information', 'adammp' ),
        'object_types' => array( 'portfolio' ),
        'context'    => 'normal',
        'priority'   => 'high',
    ) );
    $port_info_meta->add_field( array(
        'name'       => esc_html__( 'Client Name', 'adammp' ),
        'desc'       => esc_html__( 'Add a Client Name', 'adammp' ),
        'id'         => $prefix . 'client_name',
        'type' => 'text',
    ) );                                      
    $port_info_meta->add_field( array(
        'name'       => esc_html__( 'Project Date', 'adammp' ),
        'desc'       => esc_html__( 'Add a Project Date', 'adammp' ),
        'id'         => $prefix . 'project_date',
        'type' => 'text_date',
    ) );                                      
    $port_info_meta->add_field( array(
        'name'       => esc_html__( 'Project Skills', 'adammp' ),
        'desc'  => esc_html__( 'Skills Required for the Project', 'adammp' ),
        'id'         => $prefix . 'project_skills',
        'type' => 'text',
    ) );                                      
    $port_info_meta->add_field( array(
        'name'       => esc_html__( 'Project Demo Link', 'adammp' ),
        'desc'  => esc_html__( 'Add a url for the Project demo link', 'adammp' ),
        'id'         => $prefix . 'project_demo',
        'type' => 'text_url',
    ) );                                      

}
