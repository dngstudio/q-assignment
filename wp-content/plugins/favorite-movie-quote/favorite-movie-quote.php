<?php
/**
 * Plugin Name:       Favorite Movie Quote
 * Description:       Favourite movie quote block.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Ivan Djukic
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       favorite-movie-quote
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_favorite_movie_quote_block_init() {
	register_block_type( __DIR__ . '/build', array(
		'render_callback' => 'render_favorite_movie_quote_block',
		'edit' => 'render_favorite_movie_quote_block',
	) );
}
add_action( 'init', 'create_block_favorite_movie_quote_block_init' );

function render_favorite_movie_quote_block($attributes) {
	ob_start();
	?>
	<div><?php echo $attributes['quote']; ?></div>
	<?php
	return ob_get_clean();
}