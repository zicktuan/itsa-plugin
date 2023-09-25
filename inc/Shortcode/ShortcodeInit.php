<?php
namespace MyPlugin\Shortcode;


use MyPlugin\Shortcode\Home\ShortcodeBgTop;
use MyPlugin\Shortcode\Home\ShortcodeAbout;
use MyPlugin\Shortcode\Home\ShortcodeService;
use MyPlugin\Shortcode\Home\ShortcodeCouter;
use MyPlugin\Shortcode\Home\ShortcodePost;
use MyPlugin\Shortcode\Home\ShortcodeFeedBack;
use MyPlugin\Shortcode\ShortcodeBrandLogo;
use MyPlugin\Shortcode\Home\ShortcodeInformaction;
use MyPlugin\Shortcode\About\ShortcodeAboutDesc;
use MyPlugin\Shortcode\About\ShortcodeCounter;
use MyPlugin\Shortcode\About\ShortcodeSolutions;
use MyPlugin\Shortcode\About\ShortcodeProminentSolutions;
use MyPlugin\Shortcode\About\ShortcodeInformation;
use MyPlugin\Shortcode\About\ShortcodeFeedback as ShortcodeAboutFeedback;
use MyPlugin\Shortcode\About\ShortcodeOurTeam;
use MyPlugin\Shortcode\Contact\ShortcodeContactForm;
use MyPlugin\Shortcode\Contact\ShortcodeContactGeneral;
use MyPlugin\Shortcode\ShortcodeBgTopGeneral;
use MyPlugin\Shortcode\Service\ShortcodeListReason;
use MyPlugin\Shortcode\Service\ShortcodePricing;
use MyPlugin\Shortcode\Service\ShortcodeInfor;
use MyPlugin\Shortcode\Service\ShortcodeFeedBack as ShortcodeServiceFb;
use MyPlugin\Shortcode\Choose\ShortcodeListReason as ShortcodeChooseReason;
use MyPlugin\Shortcode\Choose\ShortcodePreminentSolution;
use MyPlugin\Shortcode\Team\ShortcodeTeam;


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
		new ShortcodeService($this);
		new ShortcodeCouter($this);
		new ShortcodePost($this);
		new ShortcodeFeedBack($this);
		new ShortcodeBrandLogo($this);
		new ShortcodeInformaction($this);
		new ShortcodeAboutDesc($this);
		new ShortcodeCounter($this);
		new ShortcodeSolutions($this);
		new ShortcodeProminentSolutions($this);
		new ShortcodeInformation($this);
		new ShortcodeAboutFeedback($this);
		new ShortcodeOurTeam($this);
		new ShortcodeBgTopGeneral($this);
		new ShortcodeContactForm($this);
		new ShortcodeContactGeneral($this);
		new ShortcodeListReason($this);
		new ShortcodePricing($this);
		new ShortcodeInfor($this);
		new ShortcodeServiceFb($this);
		new ShortcodeChooseReason($this);
		new ShortcodePreminentSolution($this);
		new ShortcodeTeam($this);
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
