<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package k-telecom
 */

?>

<footer class="site-footer">
	<div class="wrapper">
		<div class="footer__container">
			<div class="site-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/site-logo.svg" alt="логотип сайта">
			</div>
			<p class="footer__copyright">
				© 2018–2022 ООО «К-Телеком»
			</p>
			<div class="footer__social">
				<a href="" class="footer__social-link"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_inst.png" alt=""></a>
				<a href="" class="footer__social-link"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-youtube.png" alt=""></a>
				<a href="" class="footer__social-link"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_vk.png" alt=""></a>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>