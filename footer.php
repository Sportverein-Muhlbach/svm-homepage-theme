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

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper svm-footer" id="wrapper-footer">
	<div class="container">
		<div class="row svm-footer-content">
			<div class="col-md-3 svm-footer-col">	
				<h3>Über uns</h3>
				<p>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr				</p>
			</div>

			<div class="col-md-3">	
				<h3>Kategorien</h3>
				
				<a href="#"><p>Kategorien aus Menüleiste wiederholt</p></a>
<!-- DELETE ME -->				
				<a href="#"><p>Kategorien aus Menüleiste wiederholt</p></a>
				<a href="#"><p>Kategorien aus Menüleiste wiederholt</p></a>
<!-- DELETE ME END -->
			</div>

			<div class="col-md-3">	
				<h3>Aktuelle Posts</h3>

				<div class="d-flex flex-row footer-latest-posting">
					<img class="image" src="http://placekitten.com/300/200">
					<div class="info d-flex flex-column hidden-xs-down">
						<div class="title">Le Posting</div>
						<div class="text">by super Poster9000</div>
					</div>
				</div>

<!-- DELETE ME -->
				<div class="d-flex flex-row footer-latest-posting">
					<img class="image" src="http://placekitten.com/300/200">
					<div class="info d-flex flex-column hidden-xs-down">
						<div class="title">Le Posting</div>
						<div class="text">by super Poster9000</div>
					</div>
				</div>

				<div class="d-flex flex-row footer-latest-posting">
					<img class="image" src="http://placekitten.com/300/200">
					<div class="info d-flex flex-column hidden-xs-down">
						<div class="title">Le Posting</div>
						<div class="text">by super Poster9000</div>
					</div>
				</div>
<!-- DELETE ME END -->

			</div>

			<div class="col-md-3">	
				<h3>Newsletter</h3>
				<form>
					<div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="pwd">
					</div>
					<button style="margin-top: 15px; width: 90%" type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<div style="text-align: center">
		© 2016 - 2017 SV Mühlbach. All rights reserved.
	</div>

<?php if(false) { ?>

	<div class="<?php echo esc_html( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
						<a href="<?php echo esc_url( __( 'http://wordpress.org/','understrap' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'understrap' ),'WordPress' ); ?></a>
						<span class="sep"> | </span>
						<?php printf( // WPCS: XSS ok.
							esc_html__( 'Theme: %1$s by %2$s.', 'understrap' ), $the_theme->get( 'Name' ),
						'<a href="http://understrap.com/">understrap.com</a>' ); ?>
						(<?php printf( // WPCS: XSS ok.
							esc_html__( 'Version: %1$s', 'understrap' ), $the_theme->get( 'Version' ) ); ?>)
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

<?php } ?>

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
