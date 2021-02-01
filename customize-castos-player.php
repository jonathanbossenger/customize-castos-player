<?php
/**
 * Plugin Name:     Customize Castos Player
 * Plugin URI:      https://github.com/jonathanbossenger/customize-castos-player
 * Description:     Customize Castos Player
 * Author:          Jonathan Bossenger
 * Author URI:      https://castos.com/
 * Text Domain:     myprefix-castos-player
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Myprefix_Castos_Player
 */

add_filter( 'ssp_render_template', 'yourprefix_render_template' );
function yourprefix_render_template( $template_content ) {

	/**
	 * Make sure we're rendering the castos player content
	 */
	$is_player = strstr( $template_content, 'class="castos-player' );
	if ( ! $is_player ) {
		return $template_content;
	}

	/**
	 * Remove the subscribe button
	 */
	$template_content = preg_replace('/<button class="subscribe-btn"(\s.*?)<\/button>/', '', $template_content);

	/**
	 * Remove the share button
	 */
	$template_content = preg_replace('/<button class="share-btn"(\s.*?)<\/button>/', '', $template_content);

	/**
	 * Return the content
	 */
	return $template_content;
}
