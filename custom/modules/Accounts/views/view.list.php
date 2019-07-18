<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Accounts/views/view.list.php');

class CustomAccountsViewList extends AccountsViewList{
    
    public function __construct(){
        
    }
    
    public function preDisplay(){
       
       $this->city_update_modal_layout = 'custom/modules/Accounts/tpls/cityUpdateModal.tpl';
       parent::preDisplay();
    }
    
    public function listViewProcess(){
        //$this->params['custom_where'] = " AND accounts.name ='Talha'";
        $this->processSearchForm();
        $this->lv->searchColumns = $this->searchForm->searchColumns;

        if (!$this->headers)
            return;
        if (empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false) {
            $this->lv->ss->assign("SEARCH", true);
            $this->lv->ss->assign('savedSearchData', $this->searchForm->getSavedSearchData());
            $this->lv->setup($this->seed, 'include/ListView/ListViewGeneric.tpl', $this->where, $this->params);
            $savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
            echo $this->lv->display();
        }
    }
    
    public function display(){
        echo "<script type='text/javascript' src='custom/modules/Accounts/js/cstmMassUpdate.js'></script>";
        $this->lv->actionsMenuExtraItems[] = "<a href='javascript:void(0)' class='parent-dropdown-action-handler' onclick='updateCity()'>City Mass Update</a>"; 
        $smarty = new Sugar_Smarty();
        $smarty->display($this->city_update_modal_layout);// echo compiled HTML 
        

        parent::display();
         
        //Get Advance search 
        

        global $current_user;
        echo "User Id :".$current_user->id."<br>";
        echo "<pre>";
        print_r($this->searchForm->lv->data['pageData']['queries']['baseURL']);
        echo "</pre>";

        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";



    }
    
}