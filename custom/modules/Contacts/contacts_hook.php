<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class Contact_Hook{
    function contact_before_save($bean, $event, $arguments){
        $GLOBALS['log']->fatal("contact_before_save\n");
        $GLOBALS['log']->fatal(print_r($bean->first_name,true));
        $GLOBALS['log']->fatal(print_r("fetched_row ".$bean->fetched_row['first_name'],true));
        $GLOBALS['log']->fatal("*************"); 
        $GLOBALS['log']->fatal(print_r($bean->last_name,true));
        $GLOBALS['log']->fatal(print_r("fetched_row ".$bean->fetched_row['last_name'],true));
        $GLOBALS['log']->fatal("\n"); 
       

    }
    function contact_after_save($bean, $event, $arguments){
        $GLOBALS['log']->fatal("contact_after_save\n");
        $GLOBALS['log']->fatal(print_r($bean->first_name,true));
        $GLOBALS['log']->fatal(print_r("fetched_row ".$bean->fetched_row['first_name'],true));
        $GLOBALS['log']->fatal("*************"); 
        $GLOBALS['log']->fatal(print_r($bean->last_name,true));
        $GLOBALS['log']->fatal(print_r("fetched_row ".$bean->fetched_row['last_name'],true));
        $GLOBALS['log']->fatal("\n"); 
        /* echo "<pre>";
        print_r($bean); */
        
    }
}