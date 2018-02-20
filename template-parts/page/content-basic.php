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

<article id="post-<?php the_ID(); ?>" <?php post_class('basic-page panel'.$twentyseventeencounte); ?>>
	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
