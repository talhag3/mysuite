<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Accounts/views/view.edit.php');

class CustomAccountsViewEdit extends AccountsViewEdit{
    
    function CustomAccountsViewEdit(){
        parent::__construct();
    }
    
    function display(){

        echo "<script type='text/javascript'>
            $(document).ready(function(){
                var yes_no = document.getElementById('sent_syncarpha_c');
                for( i=0 ; i < yes_no.length ; i++){
                    if(yes_no[i].value == 'yes'){
                        yes_no[i].style.color = 'red';
                        yes_no[i].style.backgroundColor = 'yellow';
                    }
                }
            });
        </script>";


        if($this->ev->isDuplicate){
          $this->bean->status = $this->bean->getDefaultStatus();
        } 
      
        $this->ev->ss->assign('readOnly', 'readonly = "readonly"');
        
        parent::display();
        
    }
}