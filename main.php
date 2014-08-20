<?php
/* 
Plugin Name:		WordPress plugin template
Plugin URI:			http://sergey-s-betke.blogs.csm.nov.ru/category/web/wordpress/
Description:		Automatically send HTTP 1.1 headers "Cache-control", "Pragma" and "Expires".
Version:			0.1.0
Author:				Sergey S. Betke
Author URI:			http://sergey-s-betke.blogs.csm.nov.ru/about
Text Domain:		wordpress-plugin-template
Domain Path:		/languages/
GitHub Plugin URI: 	https://github.com/sergey-s-betke/WordPress-plugin-template
*/

use \WPF\v1 as WPF;

require_once ( 'wpf' . DIRECTORY_SEPARATOR . 'wpf_inc.php' );
WPF\Loader::_require_once( 'wpf_plugin_base.php' );
WPF\Loader::_require_once( 'wpf_setting_base.php' );
WPF\Loader::_require_once( 'wpf_setting_pluginsetting.php' );
WPF\Loader::_require_once( 'wpf_setting_validator_base.php' );
WPF\Loader::_require_once( 'wpf_plugin_part_load_admin.php' );
// WPF\Loader::_require_once( 'wpf_textdomain_plugin.php' );

// new WPF\TextDomain\Plugin( 'wordpress-plugin-template' );

new WPF\Plugin\Base (
	__FILE__

	, new WPF\Setting\PluginSetting( 'test-option', 111, false, 'intval' )
	, new WPF\Setting\PluginSetting( 'second', 222, false,
		new WPF\Setting\Validate\Base( 
			__( 'error message' )
			, false
			, 'is_email'
		)
	)
	
	, new WPF\Plugin\Part\Load\Admin()
);

?>