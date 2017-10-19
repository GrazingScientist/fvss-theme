<?php
/**
 * @file plugins/themes/default/FvssThemePlugin.inc.php
 *
 * @class FvssThemePlugin
 * @ingroup plugins_themes_default
 *
 * @brief Fvss theme
 */

import('lib.pkp.classes.plugins.ThemePlugin');

class FvssThemePlugin extends ThemePlugin {
	
	/**
	 * Initialize the theme's styles, scripts and hooks. This is only run for
	 * the currently active theme.
	 *
	 * @return null
	 */
	public function init() {
		$this->setParent('defaultthemeplugin');
		$this->modifyStyle('stylesheet', array('addLess' => array('styles/index.less')));
		//$this->modifyStyle('stylesheet', array('addLess' => array('styles/fvss-style.less')));
	}
	
	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	function getDisplayName() {
		return "Flora et Vegetatio Sudano-Sambesica";
	}
	
	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		return "The default theme, modified for Flora et Vegetatio Sudano-Sambesica";
	}
}
