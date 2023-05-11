<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package IDJ_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

            <div><?php get_template_part( 'template-parts/content', get_post_type() ); ?></div>

			
            <div><?php echo get_post_meta(get_the_ID(), 'movie_title', true ); ?></div>

        <?php endwhile; // End of the loop.
		?>
        
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
