<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/*
				 * A sidebar in the footer? Yep. You can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<!-- Plain text to not have "Powered by Wordpress" as the footer -->
				<p>copyright &copy 2017 MSPD | <a href="/privacy/">privacy</a> | <a href="/bid-opportunities/">bid opportunities</a>
				<br>Office of  State Public Defender - Woodrail Centre - 1000 West Nifong, Building 7, Suite 100 - Columbia, MO 65203 
				<br>phone: 573-777-9977 email: <a href="mailto:public.defender@mspd.mo.gov">public.defender@mspd.mo.gov</a></p>
				
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>