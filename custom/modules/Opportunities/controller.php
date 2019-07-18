<?php
require_once('include/MVC/Controller/SugarController.php');


class OpportunitiesController extends SugarController {
    function action_big(){
        $this->view = "bigview_oppor";
	}
	function action_getContacts(){
		if($this->bean->load_relationship('contacts'))
		{ $relatedBeans = $this->bean->contacts->getBeans();
		  if($relatedBeans !=null){
			if(!isset($_REQUEST['sugar_body_only']) && $_REQUEST['sugar_body_only']!='true'){
			   header("Location:?module=Opportunities&action=big&record=$this->bean->id");
			   exit();
			}else{//  sugar_body_only == true
				echo "true";
			}
		  }
		  else{//no related beans 
             echo "false";   
		  }
		}
		else{// relations not load
		    echo "false";	
		}
	}
}
?>