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
<!-- youtubevideo <div class="video-overlay">
	<p id="close" onclick="setTimeout(function(){
			  overlay.style.display = '';
			}, 200)">X
	</p>
	<div class="main-video">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/4XxK3VzPXXs?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
		</iframe>
	</div>
</div> -->
<article id="post-<?php the_ID(); ?>" <?php post_class('basic-page panel '.$twentyseventeencounter); ?>>
	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );
		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
	?>
	<div id="in-the-news" class="itn panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-12">	
					<h2 class="center-header tu big-heading-sizes"><?php the_title();?></h2>
				</div>
				<div class="col-md-12 col-12 row" style ="margin: auto;">
					<?php /* translators: %s: Name of current post */
						the_content();
					?>
				</div>
			</div>
		</div>
		<div class="panel-image-prop" style="padding-top: 0px;"></div>
	</div><!-- .panel-image -->
	<?php endif; ?>
</article><!-- #post-## -->
<!-- givesection

<div class="give container">
	<div class="row">
		<div class="col-md-6 col-10">
			<p class="aligner-item huge-text tu" id="give-h">Give</p>
		</div>
	</div>
</div>
<div class="give-info">
		stuff
</div> -->
