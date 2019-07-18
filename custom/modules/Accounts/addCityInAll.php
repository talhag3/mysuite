<?php
    $new_city_name = "Columbus";
    $uids = array();
    
    if(isset($_POST['data']) && !empty($_POST['data'])) {
        $uids = explode(',',$_POST['data']);
    }
    elseif(isset($_POST['select_entire_list']) && !empty($_POST['select_entire_list'])) {
        //In Case Of Seach / Advance Search We Have A Partial Table Records 
        //So To Prevent All Table Update We Are Using Query 
        require_once('include/MassUpdate.php');
        $mass = new MassUpdate();
        $mass->generateSearchWhere($_REQUEST['module'], $_POST['query']);
        //Query with where clause
        if($mass->where_clauses) {
            $query  = "SELECT id from accounts where ".$mass->where_clauses."AND deleted=0";    
        }
        else {
            $query  = "SELECT id from accounts where deleted=0";
        }
        $GLOBALS['log']->fatal('Fatal message'); 
        //Getting Result Set 
        $result = $GLOBALS['db']->query($query);
        while($val = $GLOBALS['db']->fetchByAssoc($result))
        {   //preparing ids Array 
            array_push($uids, $val['id']);
        }
    }
    
    //Update Account Records 
    foreach ($uids as $record_id ) {
        $bean = BeanFactory::getBean("Accounts", $record_id);
        $bean->billing_address_city = $new_city_name;
        $bean->save();
    }
    echo count($uids);

?>
