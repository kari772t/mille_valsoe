<?php
/**
 * Health Check tab contents.
 *
 * @package Health Check
 */

// Make sure the file is not directly accessible.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'We\'re sorry, but you can not directly access this file.' ); // phpcs:ignore
}

?>

<dl id="health-check-tools" role="presentation" class="health-check-accordion">
	<?php
	/**
	 * Filter the features available under the Tools tab.
	 *
	 * You may introduce your own, or modify the behavior of existing tools here,
	 * although we recommend not modifying anything provided by the plugin it self.
	 *
	 * Any interactive elements should be introduced using JavaScript and/or CSS, either
	 * inline, or by enqueueing them via the appropriate actions.
	 *
	 * @param array $args {
	 *     An unassociated array of tabs, listed in the order they are registered.
	 *
	 *     @type array $tab {
	 *         An associated array containing the tab title, and content.
	 *
	 *         @type string $label   A pre-escaped string used to label your tool section.
	 *         @type string $content The content of your tool tab, with any code you may need.
	 *     }
	 * }
	 */
	$tabs = apply_filters( 'health_check_tools_tab', array() );

	foreach ( $tabs as $count => $tab ) :
		?>

	<dt role="heading" aria-level="2">
		<button aria-expanded="false" class="health-check-accordion-trigger" aria-controls="health-check-accordion-block-<?php echo esc_attr( $count ); ?>" id="health-check-accordion-heading-<?php echo esc_attr( $count ); ?>" type="button">
			<span class="title">
				<?php echo $tab['label']; ?>
			</span>
			<span class="icon"></span>
		</button>
	</dt>
	<dd id="health-check-accordion-block-<?php echo esc_attr( $count ); ?>" role="region" aria-labelledby="health-check-accordion-heading-<?php echo esc_attr( $count ); ?>" class="health-check-accordion-panel" hidden="hidden">
		<?php echo $tab['content']; ?>
	</dd>

	<?php endforeach; ?>
</dl>

<?php
include_once( TD_HEALTH_CHECK_PLUGIN_DIRECTORY . '/modals/diff.php' );
