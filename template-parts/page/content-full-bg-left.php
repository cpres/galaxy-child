<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
global $twentyseventeencounter;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('basic-page panel '.$twentyseventeencounter.' row'); ?>>
	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

		<div class="panel-image Aligner" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
		  <h2><?php the_title();?></h2>

		  <div class="col-md-5">
			<?php
				/* translators: %s: Name of current post */
				the_content();
			?>

		</div>
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>
</article><!-- #post-## -->
