<?php
namespace MyPlugin\Shortcode;


use MyPlugin\Shortcode\Home\ShortcodeBgTop;
use MyPlugin\Shortcode\Home\ShortcodeWeDo;
use MyPlugin\Shortcode\Home\ShortcodeAbout;
use MyPlugin\Shortcode\Home\ShortcodeProjects;
use MyPlugin\Shortcode\Home\ShortcodeService;
use MyPlugin\Shortcode\Home\ShortcodePost;
use MyPlugin\Shortcode\Home\ShortcodeInformaction;
use MyPlugin\Shortcode\ShortcodePricing;
use MyPlugin\Shortcode\Contact\ShortcodeContactGeneral;
use MyPlugin\Shortcode\Contact\ShortcodeContactForm;
use MyPlugin\Shortcode\ShortcodeBgTopGeneral;
use MyPlugin\Shortcode\ShortcodeTeam;
use MyPlugin\Shortcode\About\ShortcodeAboutDesc;
use MyPlugin\Shortcode\About\ShortcodeChooseUs;
use MyPlugin\Shortcode\About\ShortcodeProcess;
use MyPlugin\Shortcode\Service\ShortcodeListService;


/**
 * @author lookawesome team
 * @version 1.0
 * @package Shortcode
 * 
 * Init shortCode for theme lookAwesome
*/
class ShortcodeInit 
{
	function __construct() {
		add_action( 'plugins_loaded', array($this, 'includeTemplate') );
	}

	public function includeTemplate() {
        
		new ShortcodeBgTop($this);
		new ShortcodeAbout($this);
		new ShortcodeWeDo($this);
		new ShortcodeProjects($this);
		new ShortcodeService($this);
		new ShortcodePost($this);
		new ShortcodeInformaction($this);
		new ShortcodePricing($this);
		new ShortcodeContactGeneral($this);
		new ShortcodeContactForm($this);
		new ShortcodeBgTopGeneral($this);
		new ShortcodeTeam($this);
		new ShortcodeAboutDesc($this);
		new ShortcodeChooseUs($this);
		new ShortcodeProcess($this);
		new ShortcodeListService($this);
	}

	/**
	 * Get template path.
	 *
	 * @param  string $filename Filename with extension.
	 * @return string           Template path.
	 */
	public function locateTemplate( $filename ) {
		$theme_dir = apply_filters( 'lookawesome_shortcode_template_theme_dir', 'shortcodes/' );
		$plugin_path = MYPLUGIN_PLUGIN_DIR . 'templates/shortcodes/';

		$path = '';

		if ( locate_template( $theme_dir . $filename ) ) {
			$path = locate_template( $theme_dir . $filename );
		} elseif ( file_exists( $plugin_path . $filename ) ) {
			$path = $plugin_path . $filename;
		}

		return apply_filters( 'lookawesome_shortcode_locate_template', $path, $filename );
	}
}
