<?php
require_once('include/MVC/Controller/SugarController.php');


class ProspectListsController extends SugarController {
    
	function action_mergerTargetList(){
		if( isset($_REQUEST['tr_name']) && isset($_REQUEST['tr_ids']) && !empty($_REQUEST['tr_name']) && !empty($_REQUEST['tr_ids']) ){
		    $tr_ids = explode(',',$_REQUEST['tr_ids'] );
			$new_tr_name = $_REQUEST['tr_name'];
			
			// Create A New Target List
			$newTRBean = BeanFactory::getBean('ProspectLists');
			$newTRBean = new ProspectList(); 
			// New TargetList Name
			$newTRBean->name = $new_tr_name;
			$newTRBean->save();
			// loop ids and load related TR 
			foreach($tr_ids as $tr_id){
				// get Target List Bean
                $tr_bean = BeanFactory::getBean("ProspectLists",$tr_id);
				
				// Load Related Contacts Id
				if($tr_bean->load_relationship('contacts')){
					
					$tr_contact_beans = $tr_bean->contacts->getBeans();
					
					foreach($tr_contact_beans as $tr_contact_bean){
					
						if($newTRBean->load_relationship('contacts')){
							$newTRBean->contacts->add($tr_contact_bean->id);
						}
						
						//Remove Contacts From Target List
						$tr_bean->contacts->delete($tr_bean->id,$tr_contact_bean->id);
					}
				}

				// Load Related Leads Id
				if($tr_bean->load_relationship('leads')){
					
					$tr_lead_beans = $tr_bean->leads->getBeans();
					
					foreach($tr_lead_beans as $tr_lead_bean){
					
						if($newTRBean->load_relationship('leads')){
							$newTRBean->leads->add($tr_lead_bean->id);
						}
					 
						//Remove Leads From Target List
						$tr_bean->leads->delete($tr_bean->id,$tr_lead_bean->id);
					}
				}
				
				// Load Related Accounts Id
				if($tr_bean->load_relationship('accounts')){
					
					$tr_account_beans = $tr_bean->accounts->getBeans();
					
					foreach($tr_account_beans as $tr_account_bean){
					
						if($newTRBean->load_relationship('accounts')){
							$newTRBean->accounts->add($tr_account_bean->id);
						}
					
						//Remove Accounts From Target List
						$tr_bean->accounts->delete($tr_bean->id,$tr_account_bean->id);
					}
				}

				// Load Related Targets Id
				if($tr_bean->load_relationship('prospects')){
					$tr_target_beans = $tr_bean->prospects->getBeans();
					
					foreach($tr_target_beans as $tr_target_bean){
					
						if($newTRBean->load_relationship('prospects')){
							$newTRBean->prospects->add($tr_target_bean->id);
						}
						
						//Remove Accounts From Target List
						$tr_bean->prospects->delete($tr_bean->id,$tr_target_bean->id);
					}
				}
				
				//SecurityGroups  //campaigns
				
				// Load Related users Id
				if($tr_bean->load_relationship('users')){
					
					$tr_user_beans = $tr_bean->users->getBeans();
					
					foreach($tr_user_beans as $tr_user_bean){
					
						if($newTRBean->load_relationship('users')){
							$newTRBean->users->add($tr_user_bean->id);
						}
						
						//Remove Users From Target List
						$tr_bean->users->delete($tr_bean->id,$tr_user_bean->id);
					}
				}
				
				//Delete Target List (old)
				$tr_bean->deleted = "1";
				$tr_bean->save();
			}

			

		}

	}

}



?>