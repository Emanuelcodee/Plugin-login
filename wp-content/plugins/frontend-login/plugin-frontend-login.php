<?php 

/*
 * Plugin Name:       Frontend Plugin
 * Plugin URI:        https://github.com/Emanuelcodee
 * Description:       Formulario de login y registro
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Emanuel Vanegas
 * Author URI:        https://github.com/Emanuelcodee
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       yardsale
 * Domain Path:       /languages
 */

define("PLZ_PATH",plugin_dir_path(__FILE__)); 


//API REST
require_once PLZ_PATH."/includes/API/api-registro.php";
require_once PLZ_PATH."/includes/API/api-login.php";

 //SHORTCODE
require_once  PLZ_PATH."/public/shortcode/form-registro.php";
require_once  PLZ_PATH."/public/shortcode/form-login.php";

function plz_plugin_activar(){
    add_role('cliente', "Cliente", "read_post");
    
}

register_activation_hook(__FILE__,"plz_plugin_activar");
    
function plz_plugin_desactivar(){
    remove_role('cliente');
}

register_deactivation_hook(__FILE__,"plz_plugin_desactivar");

