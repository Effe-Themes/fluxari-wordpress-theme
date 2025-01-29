<?php
add_action( 'admin_menu', 'fluxari_getting_started' );
function fluxari_getting_started() {
	add_theme_page( esc_html__('Fluxari Theme', 'fluxari'), esc_html__('Fluxari Theme', 'fluxari'), 'edit_theme_options', 'fluxari-guide-page', 'fluxari_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function fluxari_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'fluxari_admin_theme_style');

// Guidline for about theme
function fluxari_test_guide() { 
	// Custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'fluxari' );
?>
<div class="wrapper-info">
	<div class="intro">
		<div class="col-left">
			<h1 class="theme-title"><?php esc_html_e( 'Fluxari WordPress Theme', 'fluxari' ); ?></h1>
			<p><?php esc_html_e('Version: ','fluxari'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-right text-align-end">
			<a class="bg-color bg-color" href="<?php echo esc_url( FLUXARI_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to PRO', 'fluxari'); ?></a>
		</div>
	</div>
	<div class="col-left">
		<div class="started">
			<hr>
			<div class="centerbold">
				<h4><?php esc_html_e('Unlock Premium Features', 'fluxari'); ?></h4>
				<p><?php esc_html_e('Unlock the full potential of your website with our Pro theme upgrade.', 'fluxari'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( FLUXARI_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade Now', 'fluxari'); ?></a>
				<hr>
				<h4><?php esc_html_e('Preview Demo', 'fluxari'); ?></h4>
				<p><?php esc_html_e('See our theme in action! Take a tour of our demo site to experience firsthand the stunning design and powerful features our theme has to offer.', 'fluxari'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( FLUXARI_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Theme Demo', 'fluxari'); ?></a>
				<hr>
				<h4><?php esc_html_e('Need Help?', 'fluxari'); ?></h4>
				<p><?php esc_html_e('Visit our support forum for assistance with any questions or feedback you may have regarding the theme.', 'fluxari'); ?></p>
				<a href="<?php echo esc_url( FLUXARI_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'fluxari'); ?></a>
				<hr>
				<h4><?php esc_html_e('Are you enjoying our theme?', 'fluxari'); ?></h4>
				<p><?php esc_html_e('We\'d love to hear your thoughts! Leave us a review and share your feedback.', 'fluxari'); ?></p>
				<a href="<?php echo esc_url( FLUXARI_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'fluxari'); ?></a>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-inner"> 
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
	</div>
</div>
<?php } ?>