<?php
/**
 * Template Name: Testimonials
 */

get_header(); 

if ( has_post_thumbnail() ) {
    $pageClass = 'content-area';
} else {
	$pageClass = 'content-area-full';
}
?>
<div id="page-contents">

<div class="page-title">
	<div class="wrapper">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	</div>
</div>

<div class="wrapper">



	<div id="primary" class="<?php echo $pageClass; ?>">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

				

			<?php endwhile; // End of the loop.
			?>

			<section class="page-testimonials">
				<div id="container">
					<?php
					/*
					*	Testimonials
					*/
					$wp_query = new WP_Query();
					$wp_query->query(array(
					'post_type'=>'testimonial',
					'posts_per_page' => -1
				));
					if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<div class="testimonial item">
							<?php the_content(); ?>
							<div class="signed"><?php the_title(); ?></div>
						</div>
				<?php endwhile; endif; ?>
				</div><!-- #container -->
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
	
</div>
</div><!-- page -->

<?php 
get_footer();
