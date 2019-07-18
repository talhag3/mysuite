<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class View_no_caps extends ViewDetail {


	function Viewtest(){
		parent::ViewDetail();
	}
	
    public function preDisplay(){
		$this->cstm_layout = 'custom/modules/Accounts/tpls/test.tpl';
	}

	function display() {
		$smarty = new Sugar_Smarty();
		//parent::display();
		global $db;
		$res = $db->query("SELECT * FROM accounts WHERE deleted=0  limit 1");
		$row = $db->fetchByAssoc($res);
		$accounts_bean = BeanFactory::getBean('Accounts',$row['id']);
		$result = [];
        
		if($accounts_bean->load_relationship('contacts')){
			$temp =[];
			$temp['account']=$accounts_bean->name;
			$temp['contacts']=$accounts_bean->contacts->getBeans();
			$result[]=$temp;
		}
		

		
		$smarty->assign("result",$result);
        $smarty->display($this->cstm_layout);
		
	}
}

?>