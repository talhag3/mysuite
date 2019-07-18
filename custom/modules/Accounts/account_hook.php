<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
class Account_Hook
{
    function after_save_method($bean, $event, $arguments)
    {
        $GLOBALS['log']->fatal('My after save is working '); 
            
    }
    function after_delete_method($bean,$event,$arguments)
    {   
        
    }  
        
    function update_fields_data($bean,$event,$arguments)
    {  /* 
        global $app_list_strings;
        $country   ='';
        $drop_down = '';
        $new_temp = array();
        $drop_down_options = $app_list_strings['testdropdown_list'];
        
        // Split desccription to get values 
        $temp = explode('~',$bean->description);
        $bean->description = $temp[0].''.$temp[2];
        
        // Fetching specific values from array 
        if(!strpos($temp[1],',')){
            $country = $temp[1];
        }
        else
        {
            $new_temp = explode(',',$temp[1]);
            $country = $new_temp[1];
        }
        
        foreach ($drop_down_options as $key => $value) {
            if($value == trim($new_temp[0])) {
               $drop_down = $key;
               break;
            }
        }

        // Assigning updated values 
        $bean->billing_address_country = trim($country);
        $bean->testdropdown_c = $drop_down;

       */
        
    }   
    
    function process_record_method(){
        /*$GLOBALS['log']->fetal("list view Records Loading ");*/
    }
}
?>