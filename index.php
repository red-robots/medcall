<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

		<?php // specific post ID you want to pull
			$post = get_post(2); 
			setup_postdata( $post );

				// $hero = get_field('hero_image');
				$heros = get_field('hero_images');
				$bottom_image = get_field('background_image');
				$title = get_field('title');
				$subtitle = get_field('subtitle');
				$text = get_field('text');
				$learnmore_link = get_field('learnmore_link');
				$title_help = get_field('title_help');
				$text_help = get_field('text_help');
				$healthcare_link = get_field('healthcare_link');
				$assist_link = get_field('assist_link');
				$offshore_link = get_field('offshore_link');
				$title_bottom = get_field('title_bottom');
				$text_bottom = get_field('text_bottom');
				$link_bottom = get_field('link_bottom');

				$size = 'full';

			wp_reset_postdata(); ?>

			<section class="hero home-section">
				<div class="flexslider">
					<ul class="slides">
						<?php foreach( $heros as $image ): ?>
							<li>
								<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
					

				<div class="info-box top-box">
					<h2><?php echo $title; ?></h2>
					<h3><?php echo $subtitle; ?></h3>
					<p><?php echo $text; ?></p>
					<div class="red-button">
						<a href="<?php echo $learnmore_link; ?>">LEARN MORE</a>
					</div>
				</div><!-- info box -->
			</section><!-- hero -->

			<section class="help">	
				<div class="small-wrapper">
					<h2><?php echo $title_help; ?></h2>
					<p><?php echo $text_help; ?></p>
					<div class="out-link offshore">
						<!-- <a href="<?php echo $offshore_link; ?>">MedCall <span class="red">Offshore</span></a> -->
						<a href="<?php echo $offshore_link; ?>">MedCall Offshore</a>
					</div>
					<div class="out-link comp">
						<!-- <a href="<?php echo $assist_link; ?>">MedCall <span class="red">Comp</span></a> -->
						<a href="<?php echo $assist_link; ?>">MedCall Comp</a>
					</div>
					<div class="out-link healthcare">
						<!-- <a href="<?php echo $healthcare_link; ?>">MedCall <span class="red">Healthcare</span></a> -->
						<a href="<?php echo $healthcare_link; ?>">MedCall Healthcare</a>
					</div>
				</div><!-- small wrapper -->
			</section><!-- help -->

			<section class="bottom home-section">
				<?php 
						if( $bottom_image ) {
							echo wp_get_attachment_image( $bottom_image, $size );
						} ?>

						<div class="info-box bottom-box">
							<h2><?php echo $title_bottom; ?></h2>
							<p><?php echo $text_bottom; ?></p>
							<div class="red-button">
								<a href="<?php echo $link_bottom; ?>">LEARN MORE</a>
							</div>
						</div><!-- info box -->
			</section><!-- bottom -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
