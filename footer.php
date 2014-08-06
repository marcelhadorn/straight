<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package straight
 */
?>

	</div><!-- #content -->
</div><!-- #page -->
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'straight' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'straight' ), 'WordPress' ); ?></a>
		<span class="sep"> | </span>
		<?php printf( __( 'Theme: %1$s by %2$s.', 'straight' ), 'straight', '<a href="http://duotones.ch" rel="designer">duotones</a>' ); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>
<?php wp_footer(); ?>

</body>
</html>
