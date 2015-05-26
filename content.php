<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('px2'); ?>>

	<header class="[ clearfix ] entry-header">
		<div class="[ sm-col sm-col-3 ] entry-header-date">
			<?php twentyfifteen_entry_meta(); ?>
		</div>

		<div class="[ sm-col sm-col-9 ] entry-header-title">
			<?php
			the_title( '<h1 class="[ mt0 mb2 brand-primary ] entry-title">', '</h1>' );

			$post_categories = wp_get_post_categories(get_the_ID());
			$cats = [];

			foreach($post_categories as $c) {
				$cat = get_category( $c );
				$cats[] = '<a class="[ inline-block caps bold small mr3 ] postcat postcat--' . $cat->slug . '" href="/category/' . $cat->slug .'">' . $cat->name . '</a>';
			}

			echo implode($cats, '');

			?>
		</div>
	</header><!-- .entry-header -->

	<div class="[ clearfix ]">

		<?php
			// Post thumbnail.
			twentyfifteen_post_thumbnail();
		?>

		<div class="[ md-col-right md-col-9 ] mb4">

			<div class="[ mb4 ] entry-content">

				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading %s', 'twentyfifteen' ),
						the_title( '<span class="screen-reader-text">', '</span>', false )
					) );

					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
						'separator'   => '<span class="screen-reader-text">, </span>',
					) );
				?>

				<footer class="[ full-width ] entry-footer">
					<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .entry-footer -->

			</div>

			<div class="[ mt4 mb4 center ]">
				<h4 class="[ h3 brand-primary mb2 ]">Have an upcoming party or event?</h4>
				<a href="/book/" class="[ button button-outline brand-secondary button-big caps ]">Invite Nancee to host &raquo;</a>
			</div>

			<div class="break">
				<div class="break-icon"><img alt="" src="<?php echo get_template_directory_uri(); ?>/dist/img/icon-grey.png" /></div>
			</div>

			<div class="[ mt2 ] single-newsletter">
			<?php get_template_part( 'footer', 'newsletter' ); ?>
			</div>

		</div>

		<div class="[ md-col md-col-3 ]">
			<!-- social -->
		</div>
	</div><!-- .entry-content -->

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

</article><!-- #post-## -->
