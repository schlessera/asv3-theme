<?php

/**
* Fires before the header template file is loaded.
*
* @since 2.1.0
* @since 2.8.0 $name parameter added.
*
* @param string|null $name Name of the specific header file to use. null for the default header.
*/
//do_action( 'get_header', $name );
echo $this->section( 'header' );

echo $this->section( 'main-navigation' );
echo $this->section( 'page-header' );
echo $this->section( 'page-body' );

/**
 * Fires before the footer template file is loaded.
 *
 * @since 2.1.0
 * @since 2.8.0 $name parameter added.
 *
 * @param string|null $name Name of the specific footer file to use. null for the default footer.
 */
//do_action( 'get_footer', $name );
echo $this->section( 'footer' );
