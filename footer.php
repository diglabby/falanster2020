<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bb
 */

$cc_link = '<a href="http://creativecommons.org/licenses/by-sa/3.0/" target="_blank">Creative Commons СС-BY-SA 3.0</a>';


$footer_text = knd_get_theme_mod('footer_text');
?>
</div><!--  #site_content -->

<footer class="site-footer"><div class="container">

	<div class="widget-area"><?php dynamic_sidebar( 'knd-footer-sidebar' );?></div>

</div></footer>

<?php wp_footer(); ?>
</body>
</html>
