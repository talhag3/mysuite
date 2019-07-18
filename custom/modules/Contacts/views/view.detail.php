<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Contacts/views/view.detail.php');
require_once('include/DetailView/DetailView2.php');

class CustomContactsViewDetail extends ContactsViewDetail{
   
    
    function preDisplay(){
        parent::preDisplay();
        $this->dv->defs['panels']['LBL_PANEL_TEST'] = [];
    }
    
    function display(){
         
        $this->dv->defs['panels']['LBL_PANEL_TEST'] = [];

        parent::display();

        
        echo "<pre>";
        print_r($this->dv->defs['panels']);
        echo "</pre>";
    }
}