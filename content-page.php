<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php /*
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
*/	?>

	<div class="entry-content">
            <img class="featured-image" src="<?=wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0]?>"/>
            <header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
            </header><!-- .entry-header -->
            <?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
