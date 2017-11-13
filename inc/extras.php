<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package adammp
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function adammp_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
    
    $classes[] = 'adammp_body'; 

	return $classes;
}
add_filter( 'body_class', 'adammp_body_classes' );

function adammp_post_classes( $classes ) {
    
	if ( has_post_format('image') ) {
		$classes[] = 'image-post';
	}

    if ( false == get_post_format() ) {
		$classes[] = 'standard-post';
	}

	return $classes;
}
add_filter( 'post_class', 'adammp_post_classes' );


if ( ! function_exists( 'adammp_breadcrumbs' ) ) {
	function adammp_breadcrumbs( $args = array() ) {
		if ( is_front_page() ) {
			return;
		}
		if ( get_theme_mod( 'adammp_show_breadcrumbs_setting' ) == 'no' ) {
			return;
		}
		global $post;
		$defaults  = array(
			'separator_icon'      => ' &#124; ',
			'breadcrumbs_id'      => 'breadcrumbs',
			'breadcrumbs_classes' => 'breadcrumbs breadcrumb-list',
			'home_title'          => 'Home'
		);
		$args      = apply_filters( 'adammp_breadcrumbs_args', wp_parse_args( $args, $defaults ) );
		/***** Begin Markup *****/
		// Open the breadcrumbs
		$html = '<ul id="' . esc_attr( $args['breadcrumbs_id'] ) . '" class="' . esc_attr( $args['breadcrumbs_classes'] ) . '">';
		// Add Homepage link & separator (always present)
		$html .= '<li class="lnk_pag link-home"><a class="bread-link bread-home" href="' . esc_url( get_home_url() ) . '" title="' . esc_attr( $args['home_title'] ) . '">' . esc_html( $args['home_title'], 'adammp' ) . '</a></li>';
		// Post
		if ( is_singular( 'post' ) ) {
			$html .= '<li class="lnk_pag item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '" title="' . esc_attr( get_the_title() ) . '">' . esc_html( get_the_title(), 'adammp' ) . '</span></li>';
		} elseif ( is_singular( 'page' ) ) {
			if ( $post->post_parent ) {
				$parents = get_post_ancestors( $post->ID );
				$parents = array_reverse( $parents );
				foreach ( $parents as $parent ) {
					$html .= '<li class="lnk_pag item-parent item-parent-' . esc_attr( $parent ) . '"><a class="bread-parent bread-parent-' . esc_attr( $parent ) . '" href="' . esc_url( get_permalink( $parent ) ) . '" title="' . esc_attr( get_the_title( $parent ) ) . '">' . esc_html( get_the_title( $parent ), 'adammp' ) . '</a></li>';
				}
			}
			$html .= '<li class="lnk_pag item-current item-' . $post->ID . '"><span title="' . esc_attr ( get_the_title() ) . '"> ' . esc_html( get_the_title(), 'adammp' ) . '</span></li>';
		} elseif ( is_singular( 'attachment' ) ) {
			$parent_id        = $post->post_parent;
			$parent_title     = get_the_title( $parent_id );
			$parent_permalink = esc_url( get_permalink( $parent_id ) );
			$html .= '<li class="lnk_pag item-parent"><a class="bread-parent" href="' . esc_url( $parent_permalink ) . '" title="' . esc_attr( $parent_title ) . '">' . esc_html( $parent_title, 'adammp' ) . '</a></li>';
			$html .= '<li class="lnk_pag item-current item-' . $post->ID . '"><span title="' . esc_attr( get_the_title() ) . '"> ' . esc_html( get_the_title(), 'adammp' ) . '</span></li>';
		} elseif ( is_singular() ) {
			$post_type         = get_post_type();
			$post_type_object  = get_post_type_object( $post_type );
			$post_type_archive = get_post_type_archive_link( $post_type );
			$html .= '<li class="lnk_pag item-cat item-custom-post-type-' . esc_attr( $post_type ) . '"><a class="bread-cat bread-custom-post-type-' . esc_attr( $post_type ) . '" href="' . esc_url( $post_type_archive ) . '" title="' . esc_attr( $post_type_object->labels->name ) . '">' . esc_html( $post_type_object->labels->name , 'adammp' ) . '</a></li>';
			$html .= '<li class="lnk_pag item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '" title="' . esc_attr( $post->post_title ) . '">' . esc_html ($post->post_title, 'adammp' ) . '</span></li>';
		} elseif ( is_category() ) {
			$parent = get_queried_object()->category_parent;
			if ( $parent !== 0 ) {
				$parent_category = get_category( $parent );
				$category_link   = get_category_link( $parent );
				$html .= '<li class="lnk_pag item-parent item-parent-' . esc_attr( $parent_category->slug ) . '"><a class="bread-parent bread-parent-' . esc_attr( $parent_category->slug ) . '" href="' . esc_url( $category_link ) . '" title="' . esc_attr( $parent_category->name ) . '">' . esc_html( $parent_category->name, 'adammp' ) . '</a></li>';
			}
			$html .= '<li class="lnk_pag item-current item-cat"><span class="bread-current bread-cat" title="' . $post->ID . '">' . single_cat_title( '', false ) . '</span></li>';
		} elseif ( is_tag() ) {
			$html .= '<li class="lnk_pag item-current item-tag"><span class="bread-current bread-tag">' . single_tag_title( '', false ) . '</span></li>';
		} elseif ( is_author() ) {
			$html .= '<li class="lnk_pag item-current item-author"><span class="bread-current bread-author">' . get_queried_object()->display_name . '</span></li>';
		} elseif ( is_day() ) {
			$html .= '<li class="lnk_pag item-current item-day"><span class="bread-current bread-day">' . get_the_date() . '</span></li>';
		} elseif ( is_month() ) {
			$html .= '<li class="lnk_pag item-current item-month"><span class="bread-current bread-month">' . get_the_date( 'F Y' ) . '</span></li>';
		} elseif ( is_year() ) {
			$html .= '<li class="lnk_pag item-current item-year"><span class="bread-current bread-year">' . get_the_date( 'Y' ) . '</span></li>';
		} elseif ( is_archive() ) {
			$custom_tax_name = get_queried_object()->name;
			$html .= '<li class="lnk_pag item-current item-archive"><span class="bread-current bread-archive">' . esc_attr( $custom_tax_name ) . '</span></li>';
		} elseif ( is_search() ) {
			$html .= '<li class="lnk_pag item-current item-search"><span class="bread-current bread-search">Search results for: ' . get_search_query() . '</span></li>';
		} elseif ( is_404() ) {
			$html .= '<li class="lnk_pag">' . esc_html__( 'Error 404', 'adammp' ) . '</li>';
		} elseif ( is_home() ) {
			$html .= '<li class="lnk_pag">' . get_the_title( get_option( 'page_for_posts' ) ) . '</li>';
		}
		$html .= '</ul>';
		$html = apply_filters( 'adammp_breadcrumbs_filter', $html );
		echo wp_kses_post( $html );
	}
}
