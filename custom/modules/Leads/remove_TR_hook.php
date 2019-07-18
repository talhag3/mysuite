<?php

class removeTRHook{
    
    function removeTR($bean , $event , $argv){
        
        $GLOBALS['log']->fatal("Remove TR");
        
        $GLOBALS['log']->fatal(print_r($_REQUEST,true));
        global $db;
        $Bean = BeanFactory::getBean("Prospects");
        
        if(isset($_REQUEST['prospect_id']) && !empty($_REQUEST['prospect_id'])){
            $tr_bean = $Bean->retrieve($_REQUEST['prospect_id']);
        }
        else{        
            $lead_id = $bean->id;
            $GLOBALS['log']->fatal("Lead ID:".$lead_id);
            //Get Tr
            $tr_bean = $Bean->retrieve_by_string_fields(['lead_id'=>$lead_id]);
        }
        
        if($tr_bean){
            $GLOBALS['log']->fatal("Target ID:".$tr_bean->id);
            // Table name prospect_lists_prospects
            $sql = "UPDATE prospect_lists_prospects SET deleted=1 WHERE related_id='".$tr_bean->id."' ";
            //Execute Query
            $db->query($sql);
        }

       
    }

    /* function removeTR($bean , $event , $argv){
        global $db;
        /* $sql = "update prospect_lists_prospects 
        SET deleted=1 
        where related_type = 'Prospects' and 
            deleted =0 and 
            related_id IN(
                select prospects.id 
                from prospects 
                inner join leads on leads.id = prospects.lead_id and leads.deleted=0 and leads.id='".$bean->id."'
                where prospects.deleted=0
        );"; 
        $sql = "select prospects.id 
                from prospects 
                inner join leads on leads.id = prospects.lead_id and leads.deleted=0 and leads.id='".$bean->id."'
                where prospects.deleted=0";
        $rslt = $db->query($sql);

        while ($row = $db->fetchByAssoc($rslt)) {
            $GLOBALS['log']->fatal(print_r($row,true));
        }
    } */
}