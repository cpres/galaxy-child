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
	<div class="col-md-6 col-xs-12">
		<p class="aligner-item huge-text tu big-left-h" id="our-dream-h"><?php the_title(); ?></p>
	</div>
	<div class="entry-content col-md-6 col-xs-12 p30" id="our-dream-p">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
