<?php
/**
 * Comments structure handling
 *
 * @package   HelloFromMeow\Developers
 * @since     1.0.0
 * @author    hellofromMeow
 * @link      http://example.com
 * @license   GNU General Public License 2.0+
 */
namespace HelloFromMeow\Developers;

/**
 * Unregister comments callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_comments_callbacks() {

}

add_filter( 'genesis_comment_list_args', __NAMESPACE__ . '\setup_comments_gravatar' );
/**
 * Modify size of the Gravatar in the entry comments
 *
 * Since 1.0.0
 *
 * @param array $args
 *
 * @return mixed
 */
function setup_comments_gravatar( array $args ) {

	$args['avatar_size'] = 60;

	return $args;

}