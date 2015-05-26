<?php
/*
Template Name: Booking Page
*/
?>

<?php get_header(); ?>

<div class="[ bg-cover mb4 ] hero hero-booking">

	<div class="[ container center px3 ]">

		<h1 class="[ white ] hero-title">Invite Nancee's Travelling Table to host your party</h1>

	</div>

</div>

<div class="[ container container-narrow mb4 ]">

	<header class="center">
		<h2 class="[ regular mb4 brand-primary ]">Turn your next party into a fun, relaxing cooking event.</h2>
	</header>

	<div class="clearfix">
		<div class="[ sm-col sm-col-6 px3 ]">

			<h3 class="[ regular brand-primary mb3 ]">Nancee's Travelling Table is a unique small party experience that takes place in your own home.</h3>

			<p>When Nancee comes to host, you'll enjoy a delicious home-cooked meal that you and your guests help prepare, and create fun memories for everyone.</p>
			<p>An event with Nancee's Travelling Table includes:</p>
			<ul>
				<li>appetizers for nibbling while you help with dinner prep</li>
				<li>instruction and participation with Nancee as she shows you and your guests how to prepare a gourmet menu of your choosing</li>
				<li>delicious desserts and coffee for after the meal, while you relax and Nancee cleans up</li>
			</ul>

		</div>
		<div class="[ sm-col sm-col-6 px3 ]">

			<h3 class="[ regular brand-primary mb3 ]">Let us know about your event</h3>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				the_content();

			// End the loop.
			endwhile;
			?>

		</div>
	</div>

</div>

<div class="[ pattern-d-g ]">
	<div class="[ container container-narrow py3 ]">

		<div class="[ clearfix ]">

			<div class="[ sm-col-10 mx-auto ]">
				<div class="[ sm-flex flex-center ] [ clearfix ]">

					<div class="[ sm-col sm-col-6 px4 py2 ]">
						<img class="circle" alt="" src="<?php echo get_template_directory_uri(); ?>/img/headshot-nancee.jpg" />
					</div>

					<div class="[ sm-col sm-col-6 px3 py2 ]">
						<h3 class="[ regular brand-primary ] mt0">About Nancee</h3>

						<p>For decades, Nancee has been delighting her family, friends, and community with delicious home cooking, a baking business, and a catering enterprise.</p>
						<p class="mb0">Now Nancee is ready to share her favourite recipes with you and your guests at your home. It’s a fun culinary experience brought to your table by Nancee's Travelling Table.</p>
					</div>

				</div>
			</div>

		</div>

	</div>
</div>

<?php get_footer(); ?>