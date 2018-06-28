<?php
/**
 * Template Name: Medical Directors
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
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'director',
				'posts_per_page' => -1,
				'paged' => $paged,
			));
				if ($wp_query->have_posts()) : ?>
					<div class="director-wrap">	
					    <?php while ($wp_query->have_posts()) : ?>
					        
					    <?php $wp_query->the_post(); 
					    	$photo = get_field('photo');
					    	$creds = get_field('credentials');
					    ?>
					    
							<div class="director">
								<img src="<?php echo $photo['url']; ?>">
								<div class="content">
									<h2><?php the_title(); ?></h2>
									<div class="creds">
										<?php echo $creds; ?>
									</div>
								</div>
							</div>
						

						<?php  endwhile; // End of the loop. ?>
					</div> 
				<?php endif;?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
</div>
</div><!-- page -->

<?php 
get_footer();
