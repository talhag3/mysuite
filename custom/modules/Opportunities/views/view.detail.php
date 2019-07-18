<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('modules/Opportunities/views/view.detail.php');

class CustomOpportunitiesViewDetail extends OpportunitiesViewDetail{
    
    function __construct() {
        parent::__construct();
    }
    
    function display() {
        $id=  $this->bean->id;
        echo "<script type='text/javascript' src='custom/modules/Opportunities/js/viewContacts.js'></script>";
        $link ="<input class='button primary' onclick='viewContacts(\"$id\")' type='button'  value='View Contacts'>";
        $this->dv->ss->assign("viewContactsLink",$link);
        parent::display();
    }
}