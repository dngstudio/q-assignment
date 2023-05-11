<?php
/**
 * Plugin Name: Movies
 * Description: A plugin for managing movies.
 * Version: 1.0.0
 * Author: Ivan Djukic
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

class MoviesPlugin
{
    /**
     * Initialize the plugin.
     */
    public function __construct()
    {
        // Register custom post type.
        add_action('init', array($this, 'register_custom_post_type'));

        // Register meta box panel.
        add_action('add_meta_boxes', array($this, 'add_meta_box'));

        // Save meta box data.
        add_action('save_post', array($this, 'save_meta_box_data'));

    }

    /**
     * Register the custom post type 'movies'.
     */
    public function register_custom_post_type()
    {
        $labels = array(
            'name' => __('Movies', 'movies'),
            'singular_name' => __('Movie', 'movies'),
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'show_in_rest' => true, // Adds REST API support. 
            'rest_base' => 'movies',
            'supports' => array('title', 'editor'),
            'menu_icon' => 'dashicons-video-alt2'
        );

        register_post_type('movies', $args);
    }

    /**
     * Add meta box panel for 'movie_title' field.
     *
     * @param string $post_type The post type.
     */
    public function add_meta_box($post_type)
    {
        if ($post_type === 'movies') {
            add_meta_box(
                'movie_title_meta_box',
                __('Movie Title', 'movies'),
                array($this, 'render_meta_box'),
                'movies',
                'normal',
                'default'
            );
        }
    }

    /**
     * Render the meta box panel.
     *
     * @param WP_Post $post The post object.
     */
    public function render_meta_box($post)
    {
        // Retrieve the current value of 'movie_title' meta.
        $movie_title = get_post_meta($post->ID, 'movie_title', true);
        ?>

        <label for="movie_title"><?php _e('Movie Title', 'movies'); ?></label>
        <input type="text" id="movie_title" name="movie_title" value="<?php echo esc_attr($movie_title); ?>">

        <?php
    }

    /**
     * Save meta box data.
     *
     * @param int $post_id The post ID.
     */
    public function save_meta_box_data($post_id)
    {
        if (isset($_POST['movie_title'])) {
            $movie_title = sanitize_text_field($_POST['movie_title']);
            update_post_meta($post_id, 'movie_title', $movie_title);
        }
    }


}


// Initialize the plugin.
new MoviesPlugin();
