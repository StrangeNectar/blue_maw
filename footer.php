<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blue_maw
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<!-- START Contact link container -->
			<div class="container">
				<div id="footer-contact--row" class="row">
					<div class="col-6 footer-contact__col footer-contact__col-left">
						<h2 class="color-is--brown">About</h2>
						<ul class="footer-contact__ul footer-contact__ul-left">
							<li><a class="color-is--brown" href="/about-maw">About MAW</a></li>
							<li><a class="color-is--brown" href="/education">Education</a></li>
							<li><a class="color-is--brown" href="/events">Calendar</a></li>
							<li><a class="color-is--brown" href="/pioneer-village">Pioneer Village</a></li>
							<li><a class="color-is--brown" href="https://www.youtube.com/channel/UCD1Ng-EY7p8fJEUUH6erDcQ" target="_blank">Youtube</a></li>
						</ul>
					</div>

					<div class="col-6 footer-contact__col footer-contact__col-right">
						<h2 class="color-is--brown">Contact</h2>
						<ul class="footer-contact__ul footer-contact__ul-right">
							<li><a class="color-is--brown" href="mailto:amwest@wyoming.com">amwest@wyoming.com</a></li>
							<li><a class="color-is--brown" href="/contactadmission">Contact/Admission</a></li>
							<li><a class="color-is--brown" href="https://www.google.com/maps/place/1445+W+Main+St,+Lander,+WY+82520/@42.841215,-108.7493277,17z/data=!3m1!4b1!4m5!3m4!1s0x8758fe27c42dd159:0xe54d252d9ed8d9db!8m2!3d42.841215!4d-108.747139" target="_blank">1445 West Main Street, Lander, WY 82520</a></li>
							<li><a class="color-is--brown" href="tel:+13073358778">(307)335-8778</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- END Contact link container -->

			<!-- START image container -->
			<div class="contact-image__container">
				<img src="http://staging.museumoftheamericanwest.com/wp-content/uploads/2018/09/header_blank-1.png" alt="MAW contact image" aria-label="MAW contact image"/>
			</div>
			<!-- END image container -->
			<!-- START Footer copyright stuff -->
			<div class="footer-copyright">
				<div class="footer-copyright__wrapper">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blue_maw' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'blue_maw' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
					<span>Theme developed by: </span>
					<a href="https://bengroneman.tech" alt="external linke to developer website" aria-label="link to ben groneman website">
					Ben Groneman
					</a>
				</div>
			</div>
			<!-- END Footer copyright stuff -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
