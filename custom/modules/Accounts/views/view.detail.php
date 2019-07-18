<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Accounts/views/view.detail.php');

class CustomAccountsViewDetail extends AccountsViewDetail{
    
    function __construct(){
        
    }

    function CustomAccountsViewDetail(){
        parent::AccountsViewDetail();
    }
    
    public function preDisplay(){
        parent::preDisplay();
    }
  
    function display(){
        
        /* $links=[
            "meetings"=>"date_start",
            "tasks"=>"date_start",
            "notes"=>"date_entered",
            "calls"=>"date_start",
            "emails"=>"date_sent"
        ];
        $data=[];
        
        //Load History Data
        foreach($links as $link => $handle){
            $sql = "SELECT DATE(".$link.".".$handle.") as date_only, count(*) as _count ";
            $sql .="FROM ".$link;
            if($link=="meetings"){
              $sql .=" WHERE (parent_id='".$this->bean->id."' OR "."account_id_fk='".$this->bean->id."' ) group by date_only  "; 
            }else{
              $sql .=" WHERE parent_id='".$this->bean->id."' group by date_only ";  
            }
            
            $result = $GLOBALS['db']->query($sql);
            while($row = $GLOBALS['db']->fetchByAssoc($result) ){
                $data[$row['date_only']][$link]=$row['_count'];
            }
        }
        echo "<script type='text/javascript'> var history_data=".json_encode($data)." </script>";
         */

    //*******************************************************************// 
        //Prepare , Data for new Requirements 
        $tables = [
            'emails'=>['date_entered','parent_id',''],
            'calls'=>['date_start','parent_id',''],
            //'meetings'=>['date_start','parent_id','account_id_fk']
        ];
        
        /* $calls_data = [];
        $emails_data = []; */
        $chart_data=[];
        foreach($tables as $t => $h) {
            $sql = "SELECT DATE(".$t.".".$h[0].") AS ".$h[0]." ,id,name FROM ".$t;
            $sql .= " WHERE (".$h[1]."='".$this->bean->id;
            if($h[2]!==''){
                $sql .="' OR ".$h[2]."='".$this->bean->id;
            }
            $sql .= "') AND deleted=0 AND ".$h[0]."!='' ORDER BY ".$h[0]." ASC "; 
            $new_data[] = $sql;
            
            $result = $GLOBALS['db']->query($sql);
            while($row = $GLOBALS['db']->fetchByAssoc($result) ){
                //${$t."_data"}[ $row[$h[0] ]][] = [$row[id],$row[name]];

                $chart_data[ $row[ $h[0] ] ] [$t] [] = [$row['id'],$row['name']];

            }
        }
        
       



        //Send Data To Chart 
       // echo "<script type='text/javascript'> var history_data='';</script>";
        //echo "<script>"."var calls_data=".json_encode($calls_data).";</script>";
       // echo "<script>"."var emails_data=".json_encode($emails_data).";</script>";
        echo "<script>"."var chart_data=".json_encode($chart_data).";</script>";
        //End Send Data To Chart

        //Testing :: Google Chart Integrate in Detail View
        $smarty = new Sugar_Smarty();
        $chart_html = $smarty->fetch("custom/modules/Accounts/tpls/chart.tpl");
        $this->dv->ss->assign("chart",$chart_html);
        //End Testing :: Google Chart Integrate in Detail View

        echo "<script type='text/javascript' src='custom/modules/Accounts/js/cstmActionLink.js'></script>";
        $link ="<input class='button primary' onclick='mylistview()' type='button'  value='My List View'>";
        $this->dv->ss->assign("mylistviewlink",$link);
        

        
        $id = $this->bean->id ;

        $link2 ="<input class='button primary' onclick='downloadPDF(\"$id\")' type='button'  value='Download Pdf'>";
        $this->dv->ss->assign("downloadPdf",$link2);

        // Text Field
        $this->bean->myfield_c = "<span style='color:green'>".$this->bean->myfield_c."</span>";
        // Change color for Dropdown field
        echo "<script type='text/javascript' src='custom/modules/Accounts/js/Detail.js'></script>";
        
        parent::display();

        
        

        echo "<pre>";
        print_r($data_);
        echo "</pre>";


        

    }
}
