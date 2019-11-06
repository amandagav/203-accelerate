<?php
/**
 * Template Name: About Page
 * 
 * The template for displaying the About page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-page-hero">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="hero-area">
					<p>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p>
				</div>				
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="services site-content">
		<div class="services-intro">
			<h3><?php the_title(); ?></h3>
			<p><?php the_content(); ?>
		</div>
		<div class="services-types">
			<?php while ( have_posts() ) : the_post();
				$service_1 = get_field('service_1');
				$description_1 = get_field('description_1');
				$icon_1 = get_field('icon_1');
				$service_2 = get_field('service_2');
				$description_2 = get_field('description_2');
				$icon_2 = get_field('icon_2');
				$service_3 = get_field('service_3');
				$description_3 = get_field('description_3');
				$icon_3 = get_field('icon_3');
				$service_4 = get_field('service_4');
				$description_4 = get_field('description_4');
				$icon_4 = get_field('icon_4');
				$size = 'full';
			?>

				<div class="service-icon-left">
					<div class="service-description">
						<h2><?php echo $service_1; ?></h2>
						<p><?php echo $description_1; ?></p>
					</div>
					<?php if($icon_1) { 
						echo wp_get_attachment_image( $icon_1, $size );
					} ?>
				</div>

				<div class="service-icon-right">
					<div class="service-description">
						<h2><?php echo $service_2; ?></h2>
						<p><?php echo $description_2; ?></p>
					</div>
					<?php if($icon_2) { 
						echo wp_get_attachment_image( $icon_2, $size );
					} ?>
				</div>

				<div class="service-icon-left">
					<div class="service-description">
						<h2><?php echo $service_3; ?></h2>
						<p><?php echo $description_3; ?></p>
					</div>
					<?php if($icon_3) { 
						echo wp_get_attachment_image( $icon_3, $size );
					} ?>
				</div>

				<div class="service-icon-right">
					<div class="service-description">
						<h2><?php echo $service_4; ?></h2>
						<p><?php echo $description_4; ?></p>
					</div>
					<?php if($icon_4) { 
						echo wp_get_attachment_image( $icon_4, $size );
					} ?>
				</div>
			
			<?php endwhile; ?> 
		</div>
		<div class="about-contact">
			<h2>Interested in working with us?</h2>
			<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
		<div>
	</section>

<?php get_footer(); ?>
