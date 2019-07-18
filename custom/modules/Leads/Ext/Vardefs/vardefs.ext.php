<?php 
 //WARNING: The contents of this file are auto-generated


   $dictionary['Lead']['fields']['cross_street_c']=array(
    'name' => 'cross_street_c',
    'vname' => 'LBL_CROSS_STREET',
    'type' => 'varchar',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Nearest Cross Street'
   );



   $dictionary['Lead']['fields']['gathered_xcel_c']=array(
    'name' => 'gathered_xcel_c',
    'vname' => 'LBL_GATHERED_XCEL',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Usage Gathered from Xcel'
   );



   $dictionary['Lead']['fields']['system_size_c']=array(
    'name' => 'system_size_c',
    'vname' => 'LBL_SYSTEM_SIZE',
    'type' => 'varchar',
    'audited'=>false,
    'required'=>false,
    'comment' => 'System Size'
   );



   $dictionary['Lead']['fields']['ignore_lead_contact_c']=array(
    'name' => 'ignore_lead_contact_c',
    'vname' => 'LBL_IGNORE_LEAD_CONTACT',
    'type' => 'varchar',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Ignore ',
    'source' => 'non-db',
   );



   $dictionary['Lead']['fields']['request_xcel_c']=array(
    'name' => 'request_xcel_c',
    'vname' => 'LBL_REQUEST_XCEL',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Usage Request to Xcel'
   );



 // created: 2018-03-13 12:03:56
$dictionary['Lead']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

   $dictionary['Lead']['fields']['sent_syncarpha_c']=array(
    'name' => 'sent_syncarpha_c',
    'vname' => 'LBL_SENT_SYNCARPHA',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Usage Sent to Syncarpha'
   );



 // created: 2018-03-13 12:03:55
$dictionary['Lead']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

   $dictionary['Lead']['fields']['hear_about_us_c']=array(
    'name'    => 'hear_about_us_c',
    'vname'   => 'LBL_HEAR_ABOUT_US',
    'type'    => 'varchar',
    'audited' => false,
    'required'=> false,
    'comment' => 'Lead Source / How did you hear about us?	'
   );



   $dictionary['Lead']['fields']['credit_ran_c']=array(
    'name' => 'credit_ran_c',
    'vname' => 'LBL_CREDIT_RAN',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Credit Ran'
   );



   $dictionary['Lead']['fields']['opp_promo_c']=array(
    'name' => 'opp_promo_c',
    'vname' => 'LBL_OPP_PROMO',
    'type' => 'enum',
    'options'=> 'opp_promo_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Promo'
   );



   $dictionary['Lead']['fields']['invoice_date_c']=array(
    'name' => 'invoice_date_c',
    'vname' => 'LBL_INVOICE_DATE',
    'type' => 'date',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Invoice Date'
   );



   $dictionary['Lead']['fields']['invoice_paid_c']=array(
    'name' => 'invoice_paid_c',
    'vname' => 'LBL_INVOICE_PAID',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Invoice Paid'
   );



 

   $dictionary['Lead']['fields']['opp_prior_address_c']=array(
    'name' => 'opp_prior_address_c',
    'vname' => 'LBL_OPP_PRIOR_ADDRESS',
    'type' => 'varchar',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Prior Address'
   );




// Relate Field
$dictionary['Lead']['fields']['fb_ad_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'fb_ad_name',
    'vname'     => 'LBL_FB_AD_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'fb_ad_id',
    'link'      => 'contacts_cases_cstm',
    'module'    => 'fc_fbads',
);
    
// Id Field 
$dictionary['Lead']['fields']['fb_ad_id'] = array(
    'name'              => 'fb_ad_id',
    'rname'             => 'id',
    'vname'             => 'LBL_FB_AD_ID',
    'type'              => 'id',
    'table'             => 'fc_fbads',
    'isnull'            => 'true',
    'module'            => 'fc_fbads',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);


$dictionary['Lead']['fields']['leads_sendgrid_campaigns']=array(
    'name'          => 'leads_sendgrid_campaigns',
    'type'          => 'link',
    'relationship'  => 'leads_sendgrid_campaigns',
    'module'        => 'pt_sendgrid_campaign',
    'bean_name'     => 'pt_sendgrid_campaign',
    'source'        => 'non-db',
    'vname'         => 'LBL_LEADS_SENDGRID_CAMPAIGNS_LINK',
);



 // created: 2018-04-06 11:50:28
$dictionary['Lead']['fields']['lead_map_c']['inline_edit']='1';
$dictionary['Lead']['fields']['lead_map_c']['labelValue']='Location';

 

 // Link Field 
    $dictionary['Lead']['fields']['fb_ad_leads'] = array(
    'name'          => 'fb_ad_leads',
    'type'          => 'link',
    'relationship'  => 'fb_ad_leads',
    'module'        => 'fc_fbads',
    'bean_name'     => 'fc_fbads',
    'source'        => 'non-db',
    'vname'         => 'LBL_FC_FBADS_LINK',
    );



   $dictionary['Lead']['fields']['living_home_c']=array(
    'name' => 'living_home_c',
    'vname' => 'LBL_LIVING_HOME',
    'type' => 'enum',
    'options'=> 'living_home_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'How long have you been in the home?'
   );



   $dictionary['Lead']['fields']['credit_passed_c']=array(
    'name' => 'credit_passed_c',
    'vname' => 'LBL_CREDIT_PASSED',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Credit Passed'
   );



 // created: 2018-03-13 12:03:55
$dictionary['Lead']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2018-03-13 12:03:57
$dictionary['Lead']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

$dictionary['Leads']['fields']['account_info'] = array(
    'name' => 'account_info',
    'type' => 'link',
    'relationship' => 'my_accounts_leads',
    'module' => 'Accounts',
    'bean_name' => 'Account',
    'source' => 'non-db',
    'vname' => 'Accounts',
);

   $dictionary['Lead']['fields']['est_install_date_c']=array(
    'name' => 'est_install_date_c',
    'vname' => 'LBL_EST_INSTALL_DATE',
    'type' => 'date',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Estimated Install Date'
   );



 

   $dictionary['Lead']['fields']['cust_inv_gen_c']=array(
    'name' => 'cust_inv_gen_c',
    'vname' => 'LBL_CUST_INV_GEN',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Customer Invoice Generated'
   );




// Relation Ship 
 $dictionary['Lead']['relationships']['fb_ad_leads'] = array(
    'lhs_module'		=> 'fc_fbads',
    'lhs_table'			=> 'fc_fbads',
    'lhs_key'			=> 'id',
    'rhs_module'		=> 'Leads',
    'rhs_table'			=> 'leads',
    'rhs_key'			=> 'fb_ad_id',
    'relationship_type'	=> 'one-to-many',
 );


   $dictionary['Lead']['fields']['adt_crm_disp_c']=array(
    'name'    =>    'adt_crm_disp_c',
    'vname'   =>    'LBL_ADT_CRM_DISP',
    'type'    =>    'enum',
    'options' =>    'adt_crm_disp_list',
    'audited' =>    false,
    'required'=>    false,
    'comment' =>    'Lead Dispositions'
   );



   $dictionary['Lead']['fields']['opp_plan_c']=array(
    'name' => 'opp_plan_c',
    'vname' => 'LBL_OPP_PLAN',
    'type' => 'enum',
    'options'=> 'opp_plan_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Plan'
   );



    //0
    $dictionary['AOS_Products_Quotes']['fields']['lift_no_c']=
    array (
        'name' => 'lift_no_c',
        'vname' => 'LBL_LIFT_NO_C',
        'type' => 'varchar',
        'audited' => false,
        'required' => false,
        'comment' => 'Text Field',
        'len' => '255',
        'size' => '20',
    );
    //1
    $dictionary['AOS_Products_Quotes']['fields']['lift_type_c']= 
    array (
        'required' => false,
        'name' => 'lift_type_c',
        'vname' => 'LBL_LIFT_TYPE_C',
        'type' => 'enum',
        'massupdate' => 0,
        'default' => '',
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => 1,
        'reportable' => true,
        'len' => 255,
        'options' => 'lift_type_list',
        'studio' => 'visible',
    );

    //2 New Dropdown
    $dictionary['AOS_Products_Quotes']['fields']['amc_type_c']= 
    array (
        'required' => false,
        'name' => 'amc_type_c',
        'vname' => 'LBL_AMC_TYPE_C',
        'type' => 'enum',
        'massupdate' => 0,
        'default' => '',
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => 1,
        'reportable' => true,
        'len' => 255,
        'options' => 'lift_type_list',
        'studio' => 'visible',
    );

    //3
    $dictionary['AOS_Products_Quotes']['fields']['no_of_landing_c']=
    array (
        'required' => false,
        'name' => 'no_of_landing_c',
        'vname' => 'LBL_NO_OF_LANDING_C',
        'type' => 'int',
        'massupdate' => 0,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'inline_edit' => true,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '255',
        'size' => '20',
        'enable_range_search' => false,
        'disable_num_format' => '',
        'min' => false,
        'max' => false,
    );
    
    //4 
    $dictionary['AOS_Products_Quotes']['fields']['lift_capacity_c']=
    array (
        'required' => false,
        'name' => 'lift_capacity_c',
        'vname' => 'LBL_LIFT_CAPACITY_C',
        'type' => 'int',
        'massupdate' => 0,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'inline_edit' => true,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '255',
        'size' => '20',
        'enable_range_search' => false,
        'disable_num_format' => '',
        'min' => false,
        'max' => false,
    );
    //5
    $dictionary['AOS_Products_Quotes']['fields']['lift_speed_c']=
    array (
        'required' => false,
        'name' => 'lift_speed_c',
        'vname' => 'LBL_LIFT_SPEED_C',
        'inline_edit' => '1',
        'options' => 'numeric_range_search_dom',
        'enable_range_search' => '1',
        'type' => 'decimal',
        'massupdate' => '0',
        'default' => '',
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '18',
        'size' => '20',
        'precision' => '2',
    );
    //6
    $dictionary['AOS_Products_Quotes']['fields']['contract_effective_date_c']=
    array (
        'required' => '0',
        'name' => 'contract_effective_date_c',
        'label' => 'LBL_Q_CONTRACT_EFFECTIVE_DATE_C',
        'vname' => 'LBL_Q_CONTRACT_EFFECTIVE_DATE_C',
        'type' => 'date',
        'massupdate' => 0,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => 1,
        'reportable' => true,
        'display_default' => '',
        'enable_range_search' => true,
        'options' => 'date_range_search_dom',
        'merge_filter' => 'disabled',
    );
    //7
    $dictionary['AOS_Products_Quotes']['fields']['contract_end_date_c']=
    array (
        'name' => 'contract_end_date_c',
        'label' => 'LBL_Q_CONTRACT_END_DATE_C',
        'vname' => 'LBL_Q_CONTRACT_END_DATE_C',
        'type' => 'date',
        'default_value' => '',
        'help' => 'Date Field Help Text',
        'comment' => 'Date Field Comment',
        'mass_update' => false,
        'required' => false,
        'reportable' => true,
        'audited' => false,
        'duplicate_merge' => false,
        'importable' => 'true',
    );

    //8
    $dictionary['AOS_Products_Quotes']['fields']['lift_manufacturer_c']=
    array (
        'name' => 'lift_manufacturer_c',
        'required' => false,
        'vname' => 'LBL_LIFT_MANUFACTURER_C',
        'type' => 'varchar',
        'massupdate' => '0',
        'default' => '',
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => true,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '255',
        'size' => '20',
    );
    //9
    $dictionary['AOS_Products_Quotes']['fields']['lift_description_c']=
    array (
      'name' => 'lift_description_c',
      'vname' => 'LBL_DESCRIPTION_C',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    );


   $dictionary['Lead']['fields']['address_image_c']=array(
    'name' => 'address_image_c',
    'vname' => 'LBL_ADDRESS_IMAGE',
    'type' => 'varchar',
    'inline_edit'=>'false',
    'audited'=>false,
    'required'=>false,
    'comment' => 'Address Image',
    'source' => 'non-db',
    'len' => '255',
   );



   $dictionary['Lead']['fields']['system_size_rcvd_c']=array(
    'name' => 'system_size_rcvd_c',
    'vname' => 'LBL_SYSTEM_SIZE_RCVD',
    'type' => 'enum',
    'options'=> 'yes_no_list',
    'audited'=>false,
    'required'=>false,
    'comment' => 'System Size Received'
   );



?>