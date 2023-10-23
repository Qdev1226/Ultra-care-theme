<?php
/**
 * Theme About Page
 *
 * @package Ultracare
 * @since 1.0
 */

function ultracare_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_ultracare-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'ultracare-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'ultracare_theme_page_admin_style' );

/**
 * Add theme page
 */
function ultracare_menu() {
	add_theme_page( esc_html__( 'Ultracare', 'ultracare' ), esc_html__( 'Ultracare Info', 'ultracare' ), 'edit_theme_options', 'ultracare-theme', 'ultracare_theme_page_display' );
}
add_action( 'admin_menu', 'ultracare_menu' );

/**
 * Display About page
 */
function ultracare_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php echo esc_html('Free Full Site Editing WordPress Theme','ultracare');?></p>
				<div class="logo-panel">
					<a href="<?php echo esc_url('https://starthemes.net/','ultracare'); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri().'/images/starlogo.png'); ?>"></a>
				</div>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php echo esc_html('Getting Started with Ultracare!','ultracare');?></h3>
							<p><?php echo esc_html('Awesome! Ultracare has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.','ultracare');?></p>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php echo esc_html('More Features with Ultracare Pro Theme','ultracare');?></h3>
							<p><?php echo esc_html('To get more features and unique home page sections, we recommend you activate the Ultracare Pro. With the pro theme installed, get more options like google fonts, colors, sliders, page template, shortcodes and more.','ultracare');?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="<?php echo esc_url('https://starthemes.net/wordpress-themes/ultracare-wordpress-theme/'); ?>"><?php echo esc_html('Buy Ultracare Pro','ultracare');?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php echo esc_html('Important Links','ultracare');?></h3>
						<a target="_blank" href="<?php echo esc_url('https://starthemes.net/wordpress-themes/ultracare-wordpress-theme/','ultracare'); ?>"><?php echo esc_html('Theme Info','ultracare');?></a>
						<a target="_blank" href="<?php echo esc_url('http://starthemesdemo.net/ultracare/','ultracare'); ?>"><?php echo esc_html('View Demo','ultracare');?></a>
						<a target="_blank" href="<?php echo esc_url('https://starthemes.net/support/','ultracare'); ?>"><?php echo esc_html('Support','ultracare');?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php echo esc_html('Leave us a review','ultracare');?></h3>
						<p><?php echo esc_html('Loved Ultracare? Feel free to leave your feedback. Your opinion helps us reach more audiences!','ultracare');?></p>
						<a href="<?php echo esc_url('https://wordpress.org/support/theme/ultracare/reviews/','ultracare');?>" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php echo esc_html('Review','ultracare');?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
