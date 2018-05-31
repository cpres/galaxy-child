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
		<div class="panel-image" id="around-the-world" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">

<div class="container">
<div class="row">
	
		  <div class="col-md-8 col-xs-12">
			<p class="aligner-item big-heading-sizes tu big-left-h" id="around-the-world-h"><?php the_title(); ?></p>
		  </div>
		  <div class="col-md-5 offset-md-7 col-lg-5 col-7 offset-4 center-text top-90">
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

<div class="atw-info">
	<div class="container">
		<h2 style="padding-bottom: 30px;">DREAMFLY PILLARS</h2>
		<div class="row">
			<div class="offset-2 col-md-4 offset-md-0">
				<h2>EDUCATION</h2>
				<p>
					To read, write, reason, and to question comfortable asumptions which inform beliefs.
				</p>
			</div>
			<div class="offset-2 col-md-4 offset-md-0">
				<h2>EXPOSURE</h2>
				<p>
					To reach out to, to experience, and to understand the unknown enemy.
				</p>
			</div>
			<div class="offset-2 col-md-4 offset-md-0">
				<h2>EMPOWERMENT</h2>
				<p>
					To imagine and realize a better reality for oneself and others.
				</p>
			</div>
		</div>
		<div id="img-container" style="margin-bottom: 24px;" class="row">
			<div class="big-sqr-img imgs top-row-left col-md-7">
				<div class="country-title">
					<h1>RWANDA</h1>
				</div>
			</div>
			<div class="sml-pair-imgs col-md-5 row">
				<div class="imgs top-row-top-right d-none d-md-block col-md-12"></div>
				<div class="imgs top-row-bottom-right d-none d-md-block col-md-12"></div>
			</div>
			<div class="big-sqr-img imgs bottom-row-top-left-pak col-md-5">
				<div class="country-title">
					<h1>PAKISTAN</h1>
				</div>
			</div>
			
			<div class="big-pair-imgs col-md-7 row">
				<div class="imgs bottom-row-top-right-afghan t d-none d-md-block col-md-12">
					<div style="position: relative;"class="country-title">
						<h1>AFGHANISTAN</h1>
					</div>
				</div>
				<div class="imgs three-smiles d-none d-md-block col-md-12"></div>
			</div>
			<div class="big-sqr-img imgs bottom-row-top-right-afghan t d-block d-sm-none">
				<div class="country-title">
					<h1>AFGHANISTAN</h1>
				</div>
			</div>
			<div class="big-pair-imgs col-md-7 row">
				<div class="imgs bottom-row2-left d-none d-md-block col-md-12"></div>
				<div class="imgs bottom-row2-right d-none d-md-block col-md-12"></div>
			</div>
			<div class="big-sqr-img imgs bottom-row-bottom-left-india col-md-5">
				<div class="country-title">
					<h1>INDIA</h1>
				</div>
			</div>
		</div>
	</div>
</div>