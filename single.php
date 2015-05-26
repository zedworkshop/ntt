<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="[ container mb4 ]">
		<div class="clearfix">

			<div class="[ md-col md-col-9 px2 ]">

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					// Previous/next post navigation.
					// the_post_navigation( array(
					// 	'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					// 		'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					// 		'<span class="post-title">%title</span>',
					// 	'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					// 		'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					// 		'<span class="post-title">%title</span>',
					// ) );

				// End the loop.
				endwhile;
				?>

			</div>

			<aside class="[ md-col md-col-3 px2 ]">

				<div class="[ clearfix center mb4 ] single-header">

					<div class="[ col col-3 md-col-12 ]">
						<figure class="[ block mb0 ] single-header__img">
							<img class="circle" alt="" src="<?php echo get_template_directory_uri(); ?>/dist/img/headshot-nancee.jpg" />
						</figure>
					</div>

					<div class="[ col col-9 md-col-12 ]">
						<h3 class="serif h3 brand-primary [ mt0 mb0 ]">Nancee's Notes</h3>
						<h4 class="serif default italic brand-primary-light [ mt0 ] px3">Tips, recipes, and stories from the kitchen</h4>
					</div>
				</div>

				<div class="">

					<h5 class="[ gray caps mb2 ]">Recent Notes</h5>

					<ul class="[ list-reset mb0 ] recent-posts">
					<?php
						$options = [
							'numberposts' => 3,
						];

						$recent_posts = wp_get_recent_posts($options);

						foreach( $recent_posts as $recent ) {
						?>

							<li class="[ mb1 ]">
								<a class="[ clearfix block ] [ flex flex-center ]" href="<?php echo get_permalink($recent["ID"]); ?>">

									<div class="[ col col-3 ]"><?php echo get_the_post_thumbnail($recent["ID"], 'medium'); ?> </div>
									<div class="[ col-col-9 px2 ]">
										<h6 class="[ regular caps mb0 mt0 gray ]"><?php echo get_the_date('F j, Y', $recent['ID']); ?></h6>
										<h5 class="[ mt1 mb0 ]"><?php echo $recent["post_title"]; ?></h5>
									</div>

								</a>
							</li>
						<?php
						}
					?>
					</ul>

				</div>

			</aside>

		</div><!-- .clearfix -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
