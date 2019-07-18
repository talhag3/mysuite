<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-03-13 12:03:54
$dictionary['Contact']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2018-03-13 12:03:53
$dictionary['Contact']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

// created: 2018-03-19 14:07:30
$dictionary["Contact"]["fields"]["contacts_tasks_1"] = array (
  'name' => 'contacts_tasks_1',
  'type' => 'link',
  'relationship' => 'contacts_tasks_1',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_CONTACTS_TASKS_1_FROM_TASKS_TITLE',
);


 // created: 2018-03-13 12:03:53
$dictionary['Contact']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2018-03-13 12:03:54
$dictionary['Contact']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 


$dictionary['Contact']['fields']['contacts_sendgrid_campaigns']=array(
    'name'          => 'contacts_sendgrid_campaigns',
    'type'          => 'link',
    'relationship'  => 'contacts_sendgrid_campaigns',
    'module'        => 'pt_sendgrid_campaign',
    'bean_name'     => 'pt_sendgrid_campaign',
    'source'        => 'non-db',
    'vname'         => 'LBL_CONTACTS_SENDGRID_CAMPAIGNS_LINK',
);



$dictionary['Contact']['fields']['account_relate_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'account_relate_name',
    'vname'     => 'LBL_ACCOUNT_RELATE_NAME',
    'type'      => 'relate',
    'rname'     => 'website',
    'id_name'   => 'account_relate_id',
    'module'    => 'Accounts',
    'comment'   => "Account",
    'len'       => '255',
    'size'      => '20',
    'studio'    => 'visible',
    'ext2'      => 'Accounts',
    'default'   => NULL,
    'no_default' => false,
);
    
// Id Field 
$dictionary['Contact']['fields']['account_relate_id'] = array(
    'name'              => 'account_relate_id',
    'rname'             => 'id',
    'vname'             => 'LBL_ACCOUNT_RELATE_ID',
    'type'              => 'id',
    'table'             => 'accounts',
    'isnull'            => 'true',
    'module'            => 'Accounts',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    'len'               => '36',
    'size'              => '20',
    'default' => NULL,
    'no_default' => false,
);




$dictionary['Contact']['fields']['contract_type'] = array(
    'name' => 'contract_type',
    'vname' => 'LBL_CONTRACT_TYPE',
    'type' => 'enum',
    'source' => 'non-db',
    'options'=> 'contract_type_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'TEST',
    'inline_edit'=>"false",
    'studio'=>'true'
);
?>