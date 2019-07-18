<?php
require_once('include/MVC/Controller/SugarController.php');


class AccountsController extends SugarController {
    
	function action_test(){
     	$this->view = "_no_caps";
	}

	function action_MyListView(){
	   	$this->view = "mylist";
	}
}



?>