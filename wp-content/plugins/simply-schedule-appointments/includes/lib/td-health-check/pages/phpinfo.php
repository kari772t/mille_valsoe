<?php
/**
 * The PHPInfo tab contents.
 *
 * @package Health Check
 */

// Make sure the file is not directly accessible.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'We\'re sorry, but you can not directly access this file.' ); // phpcs:ignore
}

if ( ! function_exists( 'phpinfo' ) ) {
	?>

	<div class="notice notice-error inline">
		<p>
			<?php esc_html_e( 'The phpinfo() function has been disabled by your host. Please contact the host if you need more information about your setup.', 'health-check' ); ?>
		</p>
	</div>

<?php } else { ?>

	<?php
	ob_start();
	phpinfo();
	$phpinfo_raw = ob_get_clean();

	// Extract the body of the `phpinfo()` call, to avoid all the styles they introduce.
	preg_match_all( '/<body[^>]*>(.*)<\/body>/siU', $phpinfo_raw, $phpinfo );

	// Extract the styles `phpinfo()` creates for this page.
	preg_match_all( '/<style[^>]*>(.*)<\/style>/siU', $phpinfo_raw, $styles );

	// We remove various styles that break the visual flow of wp-admin.
	$remove_patterns = array(
		"/a:.+?\n/si",
		"/body.+?\n/si",
	);

	// Output the styles as an inline style block.
	if ( isset( $styles[1][0] ) ) {
		$styles = preg_replace( $remove_patterns, '', $styles[1][0] );

		echo '<style type="text/css">' . $styles . '</style>';
	}

	// Output the actual phpinfo data.
	if ( isset( $phpinfo[1][0] ) ) {
		echo $phpinfo[1][0];
	}
	?>

	<?php
}
