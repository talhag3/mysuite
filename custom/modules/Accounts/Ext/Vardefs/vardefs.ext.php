<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-04-18 20:25:36
$dictionary['Account']['fields']['mt_book_id_c']['inline_edit']=1;

 


$dictionary['Account']['fields']['accounts_sendgrid_campaigns']=array(
    'name'          => 'accounts_sendgrid_campaigns',
    'type'          => 'link',
    'relationship'  => 'accounts_sendgrid_campaigns',
    'module'        => 'pt_sendgrid_campaign',
    'bean_name'     => 'pt_sendgrid_campaign',
    'source'        => 'non-db',
    'vname'         => 'LBL_ACCOUNTS_SENDGRID_CAMPAIGNS_LINK',
);



$dictionary['Account']['fields']['description']['unified_search'] = true;
$dictionary['Account']['fields']['description']['full_text_search']= array (
    'boost' => 3,
);

   $dictionary['Account']['fields']['gathered_xcel_c']=array(
    'name' => 'gathered_xcel_c',
    'vname' => 'LBL_GATHERED_XCEL',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Usage Gathered from Xcel'
   );



   $dictionary['Account']['fields']['billing_address_country']['massupdate']=true;
   $dictionary['Account']['fields']['billing_address_country']['studio']=true;
   


 // created: 2018-03-16 13:17:34
$dictionary['Account']['fields']['datetime_std_my_c']['inline_edit']='1';
$dictionary['Account']['fields']['datetime_std_my_c']['labelValue']='DateTime Studio';

 

   $dictionary['Account']['fields']['system_size_c']=array(
    'name' => 'system_size_c',
    'vname' => 'LBL_SYSTEM_SIZE',
    'type' => 'varchar',
    'audited'=>false,
    'required'=>false,
    'comment' => 'System Size'
   );



   $dictionary['Account']['fields']['request_xcel_c']=array(
    'name' => 'request_xcel_c',
    'vname' => 'LBL_REQUEST_XCEL',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Usage Request to Xcel'
   );



  $dictionary['Account']['fields']['website']['required']=true;
  $dictionary['Account']['fields']['website']['comment']="My Custom Comment For Default Field";


 
 $dictionary['Account']['fields']['testdropdown_c'] = array(
    'name' => 'testdropdown_c',
    'vname' => 'LBL_TESTDROPDOWN',
    'type' => 'enum',
    'options'=> 'testdropdown_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'My Test DROP DOWN Coustom');



 // created: 2018-03-13 12:03:48
$dictionary['Account']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

   $dictionary['Account']['fields']['sent_syncarpha_c']=array(
    'name' => 'sent_syncarpha_c',
    'vname' => 'LBL_SENT_SYNCARPHA',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Usage Sent to Syncarpha',
    'inline_edit'=>"false"
   );



 // created: 2018-03-13 12:03:48
$dictionary['Account']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2018-04-18 20:25:36
$dictionary['Account']['fields']['relate_book_c']['inline_edit']='1';
$dictionary['Account']['fields']['relate_book_c']['labelValue']='Relate Book ';

 

 // created: 2018-06-27 14:52:14
$dictionary['Account']['fields']['test_datetime_c']['inline_edit']='1';
$dictionary['Account']['fields']['test_datetime_c']['labelValue']='Test DateTime ';

 

   $dictionary['Account']['fields']['credit_ran_c']=array(
    'name' => 'credit_ran_c',
    'vname' => 'LBL_CREDIT_RAN',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Credit Ran'
   );



   $dictionary['Account']['fields']['invoice_date_c']=array(
    'name' => 'invoice_date_c',
    'vname' => 'LBL_INVOICE_DATE',
    'type' => 'date',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Invoice Date'
   );



 // created: 2018-04-17 11:38:54
$dictionary['Account']['fields']['image_sec_std_c']['inline_edit']='1';
$dictionary['Account']['fields']['image_sec_std_c']['labelValue']='Studio Image 2';

 

 
 $dictionary['Account']['fields']['myfield_c'] = array(
    'name' => 'myfield_c',
    'vname' => 'LBL_MYFIELD_C',
    'type' => 'varchar',
    'len' => '255',
    'audited'=>false,
    'required'=>false,
    'comment' => 'My Test Field Coustom');



   $dictionary['Account']['fields']['invoice_paid_c']=array(
    'name' => 'invoice_paid_c',
    'vname' => 'LBL_INVOICE_PAID',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Invoice Paid'
   );



 

 $dictionary['Account']['fields']['meetings_info'] = array(
    'name' => 'meetings_info',
    'type' => 'link',
    'relationship' => 'account_R_meetings',
    'module' => 'Meetings',
    'bean_name' => 'Meeting',
    'source' => 'non-db',
    'vname' => 'Meetings Info',
 );

   $dictionary['Account']['fields']['datetime_test_c']=array(
    'name' => 'datetime_test_c',
    'vname' => 'LBL_DATE_TIME',
    'type' => 'datetime',
    'group' => 'modified_by_name',
    'comment' => 'Date record last modified',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
    'dbtype'=>'datetime'
   );



/*

'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,

*/

 // created: 2018-03-22 14:39:16
$dictionary['Account']['fields']['my_check_box_c']['inline_edit']='1';
$dictionary['Account']['fields']['my_check_box_c']['labelValue']='My Check Box';

 

 // created: 2018-03-16 13:14:15
$dictionary['Account']['fields']['std_currency_c']['inline_edit']='1';
$dictionary['Account']['fields']['std_currency_c']['labelValue']='Studio Currency';

 

$dictionary['Account']['fields']['chart_test']=array(
    'name' => 'chart_test',
    'vname' => 'LBL_CHART_TEST_C',
    'type' => 'varchar',
    'len' => '255',
    'source' => 'non-db',
    'inline_edit' => false
   );



 // created: 2018-03-14 13:18:32
$dictionary['Account']['fields']['testfiled_c']['inline_edit']='1';
$dictionary['Account']['fields']['testfiled_c']['labelValue']='TEST_FIELD';
//$dictionary['Account']['fields']['testfiled_c']['readonly']=true;

 

   $dictionary['Account']['fields']['credit_passed_c']=array(
    'name' => 'credit_passed_c',
    'vname' => 'LBL_CREDIT_PASSED',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Credit Passed'
   );



 // created: 2018-05-07 19:33:19
$dictionary['Account']['fields']['multi_c']['inline_edit']='1';
$dictionary['Account']['fields']['multi_c']['labelValue']='Multi Select';

 

 // created: 2018-03-16 13:14:15
$dictionary['Account']['fields']['currency_id']['inline_edit']=1;

 

 // created: 2018-03-13 12:03:47
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2018-03-13 12:03:49
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2018-04-17 11:28:27
$dictionary['Account']['fields']['image_std_c']['inline_edit']='1';
$dictionary['Account']['fields']['image_std_c']['labelValue']='Studio Image';

 

   $dictionary['Account']['fields']['cust_inv_gen_c']=array(
    'name' => 'cust_inv_gen_c',
    'vname' => 'LBL_CUST_INV_GEN',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Customer Invoice Generated'
   );




 // created: 2018-05-03 19:06:04
$dictionary['Account']['fields']['test_currency_c']['inline_edit']='1';
$dictionary['Account']['fields']['test_currency_c']['labelValue']='My Currency';

 

$dictionary['Account']['fields']['myaccounts_mycalls_link'] = array(
    'name' => 'myaccounts_mycalls_link',
    'type' => 'link',
    'relationship' => 'myaccounts_mycalls',
    'module' => 'Calls',
    'bean_name' => 'Call',
    'source' => 'non-db',
    'vname' => 'Calls Info',
);

   $dictionary['Account']['fields']['system_size_rcvd_c']=array(
    'name' => 'system_size_rcvd_c',
    'vname' => 'LBL_SYSTEM_SIZE_RCVD',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'System Size Received'
   );





// Relate Field
$dictionary['Account']['fields']['lead_relate_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'lead_relate_name',
    'vname'     => 'LBL_LEAD_RELATE_NAME',
    'type'      => 'relate',
    'rname'     => 'title',
    'id_name'   => 'lead_relate_id',
    'link'      => 'my_leads',
    'module'    => 'Leads',
);
    
// Id Field 
$dictionary['Account']['fields']['lead_relate_id'] = array(
    'name'              => 'lead_relate_id',
    'rname'             => 'id',
    'vname'             => 'LBL_LEAD_RELATE_ID',
    'type'              => 'id',
    'table'             => 'leads',
    'isnull'            => 'true',
    'module'            => 'Leads',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);

// Link Field 
$dictionary['Account']['fields']['my_leads'] = array(
  	'name'          => 'my_leads',
    'type'          => 'link',
    'relationship'  => 'my_accounts_leads',
    'module'        => 'Leads',
    'bean_name'     => 'Lead',
    'source'        => 'non-db',
    'vname'         => 'LEADS',
);

// Relation Ship 
$dictionary['Account']['relationships']['my_accounts_leads'] = array(
    'lhs_module'		=> 'Leads',
    'lhs_table'			=> 'leads',
    'lhs_key'			=> 'id',
    'rhs_module'		=> 'Accounts',
    'rhs_table'			=> 'accounts',
    'rhs_key'			=> 'lead_relate_id',
    'relationship_type'	=> 'one-to-many',
);

?>