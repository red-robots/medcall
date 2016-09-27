<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */
$email = get_field('email', 'option');
$spam = antispambot($email);
$phone = get_field('phone', 'option');
$sitemap = get_field('sitemap_link', 'option');
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
			<div class="site-info">
				<?php echo $phone; ?> | <a href="<?php echo $spam; ?>"><?php echo $spam; ?></a>
			</div><!-- .site-info -->

			<section class="creds">
				<a href="<?php echo $sitemap; ?>">sitemap</a> | site by <a target="_blank" href="http://bellaworksweb.com">Bellaworks</a>
			</section>
	</div><!-- wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
