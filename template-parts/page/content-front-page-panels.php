<?php
/**
 * Template part for displaying pages on front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

global $twentyseventeencounter;


	$custom_fields = get_post_custom($post->ID);
	$layout_field = $custom_fields['layout'];
	if ($layout_field) :
	  foreach ( $layout_field as $key => $value ):
		get_template_part( 'template-parts/page/content', $value );
	  endforeach;
	else :
?>
<article id="panel<?php echo $twentyseventeencounter; ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>

	<div class="panel-content">
		<div class="wrap">
			<div class="entry-content">
				<h3><?php echo(the_title()) ?></h3>
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
						get_the_title()
					) );
				?>
			</div><!-- .entry-content -->


		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
<?php endif; ?>
