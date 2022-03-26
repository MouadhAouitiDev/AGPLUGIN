<?php 
/**
 * 
 * 
 * @package AGPLUGIN
 * 
 */
class AgpluginActivate{ 

    public static function activate(){
            flush_rewrite_rules();
    }



}