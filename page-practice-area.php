<?php
/**
 * Template Name: Practice Area
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>
<div id="page-contents">

<div class="page-title">
	<div class="wrapper">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	</div>
</div>

<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
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

			wp_reset_postdata();
			?>

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

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- wrapper -->
</div><!-- page -->
<?php
//get_sidebar();
get_footer();
