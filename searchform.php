<?php

/**

 * Template for displaying search forms in Adam

 *

 * @package WordPress

 * @subpackage Adam

 */

?>



 <div class="search-widget">

        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

            

                <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'nerds' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />

            <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'nerds' ); ?></span><i class="icon-magnifying-glass"></i></button>

        </form>

    </div>