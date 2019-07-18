<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class HomeViewannotated_chart_settings extends SugarView {
    
    function __construct(){
    }
   
    function display(){
        //Required Only For First Time
            $this->insert_chart_modules_settings();
        //-------------------------------------
        
        if( isset($_REQUEST['submit']) && !empty($_REQUEST['submit']) ){
            /* echo "<pre>";
            print_r($_REQUEST);
            echo "</pre>"; */
            $this->update_chart_modules_settings($_REQUEST);
        }
        
        $smarty = new Sugar_Smarty();

        $chart_modules = array(
            'emails' => 'Emails',
            'tasks' => 'Tasks',
            'calls' => 'Calls',
            'meetings' => 'Meetings',
            'notes' => 'Notes',
        );
        $chart_modules_selected = $this->get_chart_modules_settings();
      
        $smarty->assign('chart_modules', $chart_modules);
        $smarty->assign('chart_modules_checked',$chart_modules_selected);
        
        $html = $smarty->fetch('custom/modules/Home/tpls/annotated_chart_settings.tpl');
        echo $html;
        
        
    }
    
    function insert_chart_modules_settings(){
        global $db;
        //Firstly Check If exist
        $sql = "SELECT count(*) AS chart_module_count FROM config where category='chart_modules'";
        $result = $db->query($sql);
        $count = $db->fetchByAssoc($result);
        $chart_modules = ['emails','tasks','calls','meetings','notes'];
        if($count['chart_module_count']==0){
            foreach ($chart_modules as $value) {
                $sql = "INSERT INTO config VALUES('chart_modules','".$value."','')";
                $db->query($sql);
            }
        }
        return;
    }
   
    //Returns array of chart_modules Settings (History Modules)
    function get_chart_modules_settings(){
        global $db;
        $sql = "SELECT * FROM config WHERE category='chart_modules'";
        $result = $db->query($sql);
        $chart_modules_settings = [];
        while($row = $db->fetchByAssoc($result)){
            $chart_modules_settings[$row['name']] = $row['value']; 
        }
        return $chart_modules_settings;     
    }

    function update_chart_modules_settings($req){
        $chart_modules = ['emails','tasks','calls','meetings','notes'];
        global $db;
        foreach($chart_modules as $value){
            $sql = "UPDATE config SET value=";
            if(isset($req['chart_modules']) && in_array($value,$req['chart_modules'])){
                $sql .= "'checked' ";
            }
            else{
                $sql .= "'' ";
            }
            $sql .= "WHERE category='chart_modules' AND name='".$value."' ";
            $db->query($sql);
        }
    }   
    
}