<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
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
			while ( have_posts() ) : the_post(); 

				$video = get_field('side_video');

			?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

				<?php if( is_page('sitemap') ) {
					wp_nav_menu( array( 'theme_location' => 'sitemap' ) );
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<aside id="secondary" class="widget-area" role="complementary">
	<?php

	if ( has_post_thumbnail() ) { ?>
		
			<div class="side-image">
				<?php the_post_thumbnail('full') ?>
			</div>
			<?php 

			$images = get_field('extra_images');

			if( $images ): ?>
			    
			        <?php foreach( $images as $image ): ?>
			       		<div class="side-image">
			                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
			            </div>
			          
			        <?php endforeach; ?>
			   
			<?php endif; ?>
		

	<?php } 

		if( $video ) { ?>
		<div class="embed-container">
			<?php the_field('side_video'); ?>
		</div>
		<?php }

	?>
	</aside>
</div>
</div><!-- page -->

<?php 
get_footer();
