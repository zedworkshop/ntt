<?php
/**
 * The template part for displaying results in lists
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article class="[ md-col md-col-6 ] preview">
	<div class="[ relative ] thumbnail-wrap">
		<div class="[ absolute top-0 left-0 right-0 ] [ px2 py1 z2 bg-grad pointer-none ] [ xsmall caps white bold ] preview-cats">
		<?php

		$post_categories = wp_get_post_categories(get_the_ID());
		$cats = [];

		foreach($post_categories as $c) {
			$cat = get_category( $c );
			$cats[] = '<span class="[ inline-block ] postcat postcat--' . $cat->slug . '">' . $cat->name . '</span>';
		}

		echo implode($cats, ' / ');
		?>
		</div>

		<?php twentyfifteen_post_thumbnail(); ?>
	</div>

	<div class="preview-content">
		<header class="[ mt1 ]">
			<?php
			ntt_simple_entry_meta();
			the_title( sprintf( '<h3 class="[ mt0 ] entry-title"><a class="dark" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
			?>
		</header>

		<?php the_excerpt(); ?>

		<?php
		echo sprintf( '<a class="[ small bold caps ]" href="%s" rel="bookmark">Read article &raquo;</a>',
				esc_url( get_permalink() )
			);
		?>
	</div>
</article>