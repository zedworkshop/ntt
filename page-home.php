<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

	<div class="[ pattern-d-g ] home-hero">
		<div class="[ container container-wide ]">

			<div class="[ clearfix ] [ md-flex flex-center ]">

				<div class="[ sm-col sm-col-8 lg-col-8 ] home-carousel">
					<div class="carousel">
						<div class="carousel__items">
							<figure class="[ circle overflow-hidden relative ] carousel__item">
								<img class="[ block ]" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/img/home-food-01.jpg" />
								<figcaption class="[ absolute ] carousel__description">Asparagus, roasted sweet potato, and pork tenderloin</figcaption>
							</figure>
						</div>
						<div class="carousel__pager"></div>
					</div>
				</div>

				<div class="[ sm-col sm-col-6 lg-col-4 relative ] home-hero__titling">
					<h1 class="[ mt0 brand-primary ] home-hero__title">
						<span class="line"><span class="[ side side-a ]">Experience an in-home</span> <span class="[ side side-b ]">gourmet dinner</span></span>
						<span class="line"><span class="[ side side-a ]">prepared by</span> <span class="[ side side-b ]">you and your friends</span></span>
						<span class="line"><span class="[ side side-a ]">and hosted by</span> <span class="[ side side-b ]">a friendly, fun chef</span></span>
					</h1>

					<p class="home-hero__subtitle">Nancee's Travelling Table is the perfect event for your next private party or function.</p>
					<a class="[ button button-outline brand-secondary ] caps" href="/book/">Book now</a>
				</div>

			</div>
		</div>
	</div>


	<div class="[ container ] home-secondary">
		<div class="[ clearfix ]">

			<div class="[ sm-col sm-col-7 lg-col-8 py2 ]">
				<div class="clearfix">

					<div class="[ sm-col-right sm-col-8 lg-col-right lg-col-6 px2 ] home-about">
						<h4 class="caps brand-primary mb4">Meet your host</h4>

						<p>Nancee Campbell has enjoyed cooking for family and friends for over 30 years, and now she’s ready to come to dinner at your home.</p>
						<p>Nancee can host your next party or gathering, bringing hands-on cooking instruction, delicious hors d'ouevres and desserts, and a lot of fun and great stories.</p>

						<?php
						// // Start the loop.
						// while ( have_posts() ) : the_post();

						// 	// Include the page content template.
						// 	get_template_part( 'content', 'page' );

						// // End the loop.
						// endwhile;
						?>
					</div>

				</div>
			</div>

			<div class="[ sm-col sm-col-5 lg-col-4 p2 px2 ]">

				<h4 class="caps gray mb4">Recent Notes</h4>

				<ul class="[ list-reset mb0 ] recent-posts">
				<?php
					$options = [
						'numberposts' => 3,
					];

					$recent_posts = wp_get_recent_posts($options);

					foreach( $recent_posts as $recent ) {
					?>

						<li class="[ mb3 ]">
							<a class="[ clearfix block ] [ flex flex-center ]" href="<?php echo get_permalink($recent["ID"]); ?>">

								<div class="[ col col-4 ]"><?php echo get_the_post_thumbnail($recent["ID"], 'medium'); ?> </div>
								<div class="[ col-col-8 px2 ]">
									<h6 class="[ regular caps mb0 mt0 gray ]"><?php echo get_the_date('F j, Y', $recent['ID']); ?></h6>
									<h4 class="[ mt1 mb0 ]"><?php echo $recent["post_title"]; ?></h4>
								</div>

							</a>
						</li>
					<?php
					}
				?>
				</ul>


			</div>

		</div>
	</div>

	<div class="[ pattern-d-g ]">
	<?php get_template_part( 'footer', 'newsletter' ); ?>
	</div>

<?php get_footer(); ?>