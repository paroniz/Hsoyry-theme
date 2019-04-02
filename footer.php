<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HSOY_RY
 */

?>

	</div><!-- #content -->
	
	<footer id="colophon" class="site-footer">
		<div class="some">
			<a href="https://www.facebook.com/hsoyry/"><img class="sosmed" src="<?php echo get_bloginfo('template_url') ?>/inc/img/soc-media/facebook3.png"></a>
			<a href="https://www.instagram.com/hsoyry/"><img class="sosmed" src="<?php echo get_bloginfo('template_url') ?>/inc/img/soc-media/insta2.png"></a>
			<a href="https://www.snapchat.com/add/hsoyry?sc_referrer=None&sc_ua=facebookexternalhit%2F1.1+%28%2Bhttp%3A%2F%2Fwww.facebook.com%2Fexternalhit_uatext.php%29"><img class="sosmed" src="<?php echo get_bloginfo('template_url') ?>/inc/img/soc-media/snapchat2.png"></a>
			<a href="https://twitter.com/hsoyry"><img class="sosmed" src="<?php echo get_bloginfo('template_url') ?>/inc/img/soc-media/twitter2.png"></a>
		</div>
		<div class="footer-contact">
			<ul class="footer-contact-info">
				<li><u>Yhteystiedot</u><br>Ratapihantie 13<br>00520 Helsinki<br>1K004D PL225<br>hsoyry@gmail.com</li>
			</ul>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
