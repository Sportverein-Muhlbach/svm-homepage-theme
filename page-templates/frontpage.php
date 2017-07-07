<?php
/**
 * Template Name: Frontpage Layout
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div
				class="<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area"
				id="primary">

				<main class="site-main" id="main" role="main">
					<div class="container svm-postlist">
						
						<?php $the_query = new WP_Query( 'posts_per_page=-1' ); ?>
						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
							<div class="row">
								<div class="d-flex flex-row footer-latest-posting svm-post">
									<?php
										if(has_post_thumbnail())
										{
											?>
												<div class="image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
											<?php
										}
										else
										{
											?>
												<div class="image" style="background-image: url('<?php bloginfo('template_url'); ?>/img/svm_logo.png');"></div>
											<?php
										}
									?>
									
									<div class="info d-flex flex-column hidden-xs-down">
										<div class="title"><?php the_title(); ?></div>
										<div class="text"><?php the_author(); ?></div>
										<div class="text"><?php get_the_excerpt(); ?></div>
										<a href="<?php echo get_permalink(); ?>"> Weiterlesen...</a>
									</div>
								</div>
							</div>
						<?php 
							endwhile;
							wp_reset_postdata();
						?>

					</div>

				</main><!-- #main -->

			</div><!-- #primary -->

			<?php get_sidebar( 'right' ); ?>

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
