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

	<div class="hr"></div>

	<div class="flex-row footer-credits align-center">

		<div class="flex-cell flex-mf-8  flex-md-6">

			<div class="copy">
				<?php echo apply_filters('knd_the_content', $footer_text); ?>
				<p><?php printf(__('All materials of the site are avaliabe under license %s', 'knd'), $cc_link);?></p>
			</div>

		</div>

		<div class="flex-cell flex-mf-4 flex-md-6">
			<div class="knd-brand">
                <a title="<?php esc_attr_e("Project Kandinsky", 'knd');?>" href="<?php echo KND_OFFICIAL_WEBSITE_URL;?>" target="_blank">
				<div class="support"><?php echo esc_html__( 'Powered by Kandinsky', 'knd' ); ?></div>
				<div class="knd-banner"><svg class="knd-icon pic-knd"><use xlink:href="#pic-knd" /></svg></div>
				</a>
			</div>
		</div>

	</div>


</div></footer>

<?php wp_footer(); ?>
</body>
</html>
