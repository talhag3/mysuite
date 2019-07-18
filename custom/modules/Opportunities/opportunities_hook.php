<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
class Opportunities_Hook
{
    function process_record_method($bean, $event, $arguments){
        if($bean->amount_usdollar>100){
            $GLOBALS['log']->fetal("Oppertunity list view Records Loading..  ".$bean->amount_usdollar);
            $bean->amount = "<span style='color:green;'>".$bean->amount."<span>";
        }
    }
}
?>