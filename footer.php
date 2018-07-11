<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

	<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

	<div class="wrapper" id="wrapper-footer">

		<div class="<?php echo esc_attr( $container ); ?>">

			<div class="row">

				<div class="col-md-12">

					<footer class="site-footer" id="colophon">

						<div class="site-info">

							<a href="<?php  echo esc_url( __( 'http://wordpress.org/','understrap' ) ); ?>">
								<?php printf( 
							/* translators:*/
							esc_html__( 'Proudly powered by %s', 'understrap' ),'WordPress' ); ?>
							</a>
							<span class="sep"> | </span>

							<?php printf( // WPCS: XSS ok.
							/* translators:*/
								esc_html__( 'Theme: %1$s by %2$s.', 'understrap' ), $the_theme->get( 'Name' ),  '<a href="'.esc_url( __('http://understrap.com', 'understrap')).'">understrap.com</a>' ); ?> (

							<?php printf( // WPCS: XSS ok.
							/* translators:*/
								esc_html__( 'Version: %1$s', 'understrap' ), $the_theme->get( 'Version' ) ); ?>)
						</div>
						<!-- .site-info -->

					</footer>
					<!-- #colophon -->

				</div>
				<!--col end -->

			</div>
			<!-- row end -->

		</div>
		<!-- container end -->

	</div>
	<!-- wrapper end -->

	<div class="fixed-bottom d-block d-md-none" id="handheld-footer">

		<div class="container-fluid">
			<div class="row">
				<!-- <div class="col-md-12">
					
				</div> -->
				<div class="col">
					<?php echo '<a id="footer-my-account" href="' . esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) . '">' . esc_attr__( 'My Account', 'understrap' ) . '</a>'; ;?>
				</div>
				<div class="col">
					<div class="footer-search">
						<a id="search-icon" href="">Search</a>
						<div class="site-search">
							<?php echo get_product_search_form() ;?>
						</div>
					</div>
				</div>
				<div class="col">
					<a class="footer-cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'storefront' ); ?>">
						<span class="count">
							<?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?>
						</span>
					</a>
				</div>
			</div>
			<!-- row end -->
		</div>
		<!-- container end -->
	</div>
	<!-- wrapper end -->
	</div>
	<!-- #page we need this extra closing tag here -->
	<?php wp_footer(); ?>

	</body>

	</html>