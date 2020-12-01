<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Glass_delivery_specialist
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<div class="contact">
			<h4 class="heading">contact</h4>
			<p class="contact-detail">
				113 Halswell Road, Christchurch, Christchurch 8025, New Zealand

				Office: +64276108127
				Email:bookings@glassdelivery.co.nz
			</p>
		</div>

		<div class="contact">
			<h4 class="heading">QUICK LINKS</h4>
			<ul class="links">
				<li><a href="http://192.168.33.10/Glass%20Delivery%20Specialist/(opens in a new tab)">HOME</a></li>
				<li><a class="links-name" href="About">About</a></li>
				<li><a class="links-name" href="contact">contact</a></li>
			</ul>
		</div>

		<div class="contact">
			<h4 class="heading">WORK HOURS</h4>
			<p class="tittle-detail">
				Mon 09:00 am – 05:00 pm<br>
				Tue 09:00 am – 05:00 pm<br>
				Wed 09:00 am – 05:00 pm<br>
				Thu 09:00 am – 05:00 pm<br>
				Fri 09:00 am – 05:00 pm<br>
				Sat<br>
				Closed
				Sun<br>
				Closed
			</p>
		</div>


	</div><!-- .footer-credits -->
	<?php
	/* translators: 1: Theme name, 2: Theme author. */
	printf(esc_html__('Theme: %1$s by %2$s.', 'glass-delivery-specialist'), 'glass-delivery-specialist', '<a href="http://underscores.me/">Himanshu</a>');
	?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->