<?php
/**
 * Template Name: What We do
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
		<div id="primary" class="">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post(); 

					$video = get_field('side_video');
					$rightvideo = get_field('side_video_right'); ?>

					<div class="left-page js-blocks">

						<?php if ( has_post_thumbnail() ) { ?>
							
								<div class="side-image">
									<?php the_post_thumbnail('full') ?>
								</div>
								
						<?php } ?>
					</div>
					<div class="right-page js-blocks">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- .entry-content -->
						</article><!-- #post-## -->
					</div>

					<div class="left-page  js-blocks">
						<?php if( $video ) { ?>
							<div class="side-video">
								<?php the_field('side_video'); ?>
							</div>
							<?php } ?>
					</div>	

					<div class="right-page js-blocks">
						<?php if( $rightvideo ) { ?>
							<div class="side-video">
								<?php the_field('side_video_right'); ?>
							</div>
							<?php } ?>
					</div>		

					

					<?php  endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div><!-- page -->

<?php 
get_footer();
