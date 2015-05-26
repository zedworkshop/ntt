<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</main><!-- .main -->

	<footer id="colophon" class="[ bg-brand-primary py4 ] site-footer" role="contentinfo">

		<div class="[ container ]">
			<div class="[ clearfix ]">

				<div class="[ sm-col sm-col-8 px2 ] site-info">

					<p class="[ small gray ]">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>

					<?php
						/**
						 * Fires before the Twenty Fifteen footer text for footer customization.
						 *
						 * @since Twenty Fifteen 1.0
						 */
						do_action( 'twentyfifteen_credits' );
					?>
				</div><!-- .site-info -->

				<div class="[ col col-6 sm-col-2 px2 ]">

					<?php
					$menu_name = 'primary';

				    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
						$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

						$menu_items = wp_get_nav_menu_items($menu->term_id);

						$menu_list = '<ul class="[ list-reset small ]">';

						$menu_list .= '<li class="[ mb1 ]"><a class="[ gray ]" href="/">Home</a></li>';

						foreach ( (array) $menu_items as $key => $menu_item ) {
						    $title = $menu_item->title;
						    $url = $menu_item->url;
						    $menu_list .= '<li class="[ mb1 ]"><a class="[ gray ]" href="' . $url . '">' . $title . '</a></li>';
						}

						$menu_list .= '</ul>';
				    } else {
						$menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
				    }

				    echo $menu_list;
					?>

				</div>

				<div class="[ col col-6 sm-col-2 ]">

					<ul class="[ list-reset small ]">
						<li class="[ mb1 ]"><a class="[ gray ]" href="#">NTT on Facebook</a></li>
						<li class="[ mb1 ]"><a class="[ gray ]" href="#">NTT on Instagram</a></li>
					</ul>

					<div
					  class="fb-like"
					  data-share="true"
					  data-width="450"
					  data-show-faces="true">
					</div>

				</div>

			</div>
		</div>


	</footer><!-- .site-footer -->

	<?php wp_footer(); ?>

</body>
</html>