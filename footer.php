<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package TheShop
 */
?>

		</div>
	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">

			
<a href="<?php echo esc_url( __( 'http://www.aarong.com/', 'shop'  ) ); ?>"><?php printf( __( 'Aarong. 
1/1 Block A Lalmatia | Manik Mia Ave | Dhaka-1207.
', 'shop' ), 'Aarong' ); ?></a> 
<h4 style="color:#FF6E18" align="center">Developed By Umaiya Asma </h4>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
