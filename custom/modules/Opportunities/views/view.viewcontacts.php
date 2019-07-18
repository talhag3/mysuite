<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class Viewviewcontacts extends ViewDetail {


	function Viewviewcontacts(){
		parent::ViewDetail();
	}
	
	function display() {
       echo "hi ";
    }
		
}

?>