<?php
/**
 * @file plugins/themes/ub-ojs-theme/UbOjsThemePlugin.inc.php
 *
 * @class UbOjsThemePlugin
 * @ingroup plugins_themes_default
 *
 * @brief UB OJS standard theme
 */

import('lib.pkp.classes.plugins.ThemePlugin');

class UbOjsThemePlugin extends ThemePlugin {
	
	/**
	 * Initialize the theme's styles, scripts and hooks. This is only run for
	 * the currently active theme.
	 *
	 * @return null
	 */
	public function init() {
		$this->setParent('defaultthemeplugin');
		$this->modifyStyle('stylesheet', array('addLess' => array('styles/index.less')));
	}
	
	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	function getDisplayName() {
		return "UB OJS Standard Theme";
	}
	
	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		return "The default theme, slightly modified";
	}
}
