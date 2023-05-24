<?php
/**
 * Plugin Name: ACF Config Directory Manager
 * Plugin URI:   
 * Description:  The ACF Config Directory Manager is a powerful plugin that allows you to easily customize and manage the path of your Advanced Custom Fields (ACF) configurations. Take control of your ACF configuration files by defining a custom directory for storing and organizing them, enhancing your development workflow.
 * Version:      v1.0.0
 * Author:       info@web-dev-media.de
 * Author URI:   www.web-dev-media.de
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: acf-config-directory-manager
**/

add_filter('acf/settings/save_json', 'acf_config_path');
add_filter('acf/settings/load_json', 'acf_config_path');

/**
 * Returns the path for ACF configurations.
 *
 * @return string The ACF config path.
 */
function wdm_acf_config_path() {
	$config_path = apply_filters('wdm_acf_config_path', WP_CONTENT_DIR . '/acf-config/');
	if (!file_exists($config_path)) {
	    mkdir($config_path, 0755, true);
	}
    
	return $config_path;
}

