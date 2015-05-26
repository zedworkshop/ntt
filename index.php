<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="[ container ]">
		<div class="clearfix">

			<div class="[ sm-col-right sm-col-8 lg-col-9 ]">

				<?php if ( have_posts() ) : ?>

					<header class="[ mt3 mb2 px2 ] blog-header">
						<h3 class="serif gray">Latest Notes</h3>
					</header>

					<div class="[ clearfix ] post-previews">

						<?php
						// Start the loop.
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							// get_template_part( 'content', get_post_format() );

							get_template_part( 'partial', get_post_format() );

						endwhile;

						?>
					</div>

					<?php

					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
						'next_text'          => __( 'Next page', 'twentyfifteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
					) );
					?>

				<?php
				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'content', 'none' );

				endif;
				?>

			</div>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header class="[ sm-col sm-col-4 lg-col-3 px2 mb4 center ]">

					<div class="[ mb4 ]">
						<figure class="block mb0">
							<img class="circle" alt="" src="<?php echo get_template_directory_uri(); ?>/img/headshot-nancee.jpg" />
						</figure>
						<h1 class="h3 mt0 mb0 brand-primary">Nancee's Notes</h1>
						<p class="[ serif italic brand-primary-light px3 ]">Tips, recipes, and stories from the kitchen</p>
					</div>

					<div class="[ mb4 ]">
						<h5 class="[ caps gray mb2 ]">Categories</h5>

						<ul class="[ list-reset large bold ]">
						<?php
						wp_list_categories([
							'orderby' => 'name',
							'include' => '3,6',
							'title_li' => ''
						])
						?>
						</ul>
					</div>

					<div>
						<h5 class="[ caps gray mb2 ]">Seasons</h5>

						<ul class="[ list-reset large bold ]">
						<?php
						wp_list_categories([
							'orderby' => 'name',
							// 'include' => '2,3',
							'title_li' => ''
						])
						?>
						</ul>
					</div>
				</header>
			<?php endif; ?>

		</div>
	</div><!-- .content-area -->

<?php get_footer(); ?>
