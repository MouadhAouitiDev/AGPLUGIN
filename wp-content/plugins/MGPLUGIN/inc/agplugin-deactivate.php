<?php 
/**
 * 
 * 
 * @package AGPLUGIN
 * 
 */  
class AgpluginDeactivate{

    public static function deactivate(){

        flush_rewrite_rules();
    }
  


}