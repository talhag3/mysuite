<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class HomeViewannotated_chart_settings extends SugarView {
    
    function __construct(){
    }
   
    function display(){

        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";

        $smarty = new Sugar_Smarty();

        $html = $smarty->fetch('custom/modules/Home/tpls/annotated_chart_settings.tpl');
        echo $html;
        
        
    }
    
    
    
}