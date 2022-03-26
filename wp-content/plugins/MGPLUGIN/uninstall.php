<?php 
/**
 * Trigger File to unistall plugin
 * 
 * 
 * @package AGPLUGIN
 * 
 */
//security check 

if(! defined('WP_UNInSTALL_PLUGIN')){
    die;

}
//clear database store data if user delete th plugin :
   
$Books = get_posts(array('post_type'=>'Mgasin','numberposts'=>-1));

foreach($Mgasins as $Mgasin){
    wp_delete_post($Mgasin->ID,TRUE);
}




?>