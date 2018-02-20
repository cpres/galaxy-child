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
	<div class="col-md-5 col-xs-12 Aligner">
		<h2 class="Aligner-item huge-text tu"><?php the_title(); ?></h2>
	</div>
	<div class="entry-content col-md-7 col-xs-12 p30">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
