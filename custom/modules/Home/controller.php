<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once("modules/Home/controller.php");

class CustomHomeController extends HomeController{ 
    
    function action_annotated_chart_settings(){
       $this->view = 'annotated_chart_settings';
    }
}
