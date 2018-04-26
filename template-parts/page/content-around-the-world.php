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
<article id="post-<?php the_ID(); ?>" <?php post_class('basic-page panel '.$twentyseventeencounter); ?>>
	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>
		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">

<div class="container">
<div class="row">
	
		  <div class="col-md-8 col-xs-12">
			<p class="aligner-item big-heading-sizes tu big-left-h" id="around-the-world-h"><?php the_title(); ?></p>
		  </div>
		  <div class="col-md-4 offset-md-8 col-lg-2 col-7 offset-4 center-text top-90">
			<?php
				/* translators: %s: Name of current post */
				the_content();
			?>

		</div>

</div>
</div>

			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->
	    
	<?php endif; ?>
</article><!-- #post-## -->

<div class="container atw-info">
	<h2>DREAMFLY PILLARS</h2>
	<p>
		Etiam eleifend egestas dui, iaculis euismod neque ultricies nec. Etiam ultrices porttitor purus. Duis posuere tempus leo, sed lobortis lacus. Ut finibus metus eros, in facilisis nibh ornare non.
	</p>
	<div class="row">
		<div class="offset-2">
			<h2>EDUCATION</h2>
			<p>
				To read, write, reason, and to question comfortable asumptions which inform beliefs.
			</p>
		</div>
		<div class="offset-2">
			<h2>EXPOSURE</h2>
			<p>
				To reach out to, to experience, and to understand the unknown enemy.
			</p>
		</div>
		<div class="offset-2">
			<h2>EMPOWERMENT</h2>
			<p>
				To imagine and realize a better reality for oneself and others.
			</p>
		</div>
	</div>
	<div id="img-container" class="row">
		<div class="big-sqr-img imgs top-row-left">
			<div class="country-title">
				<h1>RWANDA</h1>
			</div>
		</div>
		<div class="imgs top-row-top-right d-none d-md-block"></div>
		<div class="imgs top-row-bottom-right d-none d-md-block"></div>
		<div class="long-big-img imgs bottom-row-top-left-pak">
			<div class="country-title">
				<h1>PAKISTAN</h1>
			</div>
		</div>
		<div class="big-sqr-img imgs bottom-row-top-right-afghan t">
			<div class="country-title">
				<h1>AFGHANISTAN</h1>
			</div>
		</div>
		<div class="imgs three-smiles d-none d-md-block"></div>
		<div class="imgs bottom-row2-left d-none d-md-block"></div>
		<div class="imgs bottom-row2-right d-none d-md-block"></div>
		<div class="long-big-img imgs bottom-row-bottom-left-india">
			<div class="country-title">
				<h1>INDIA</h1>
			</div>
		</div>
	</div>
</div>