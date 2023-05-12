<?php
/**
 * 
 * Plugin name: Contact Plugin
 * Description: Plugin for my custom contact form
 * Version: 1.0.0
 * Text Domain: contact-plugin
 * 
 */
if(!defined('ABSPATH')){
    //if i acees direct my plugin tell this message unless wordperess acess it
    die("you shoudnot be here");
}
if(!class_exists('ContactPlugin')){
class ContactPlugin
{
public function __construct(){
    define("pluginpath",plugin_dir_path(__FILE__));
    require_once(pluginpath ."/vendor/autoload.php");
}
//all logic in this function 
public function iniateplugin(){
include_once pluginpath . 'includes/utlites.php';
include_once pluginpath . 'includes/option-pages.php';
include_once pluginpath . 'includes/contact-form.php';
include_once pluginpath . 'includes/db-table.php';

}

}
$conatactplugin=new ContactPlugin();
$conatactplugin->iniateplugin();
}
