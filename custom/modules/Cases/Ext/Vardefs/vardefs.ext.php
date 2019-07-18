<?php 
 //WARNING: The contents of this file are auto-generated


		 
			$dictionary['Case']['fields']['status_reason_c'] = array(
				'required' => false,
				'name' => 'status_reason_c',
				'label' => 'LBL_STATUS_REASON',
				'vname' => 'LBL_STATUS_REASON',
				'type' => 'enum',
				'massupdate' => 0,
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
				'calculated' => false,
				'len' => 100,
				'size' => '20',
			    'options' => 'status_reason_list
', 
				'studio' => 'visible',
				'dependency' => false,
			);
		

		 
			$dictionary['Case']['fields']['resend_phys_authorization_c'] = array(
				'required' => false,
				'name' => 'resend_phys_authorization_c',
				'label' => 'LBL_RESEND_PHYS_AUTHORIZATION',
				'vname' => 'LBL_RESEND_PHYS_AUTHORIZATION',
				'type' => 'bool',
				'massupdate' => 0,
				'default' => '0',
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
			);
		

		 
			$dictionary['Case']['fields']['yearly_copay_savings'] = array(
				'required' => false,
				'name' => 'yearly_copay_savings',
				'vname' => 'LBL_YEARLYOPAY_SAVINGS',
				'type' => 'varchar',
				'massupdate' => 0,
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
			);
		

		 
			$dictionary['Case']['fields']['last_target_filled'] = array(
				'required' => false,
				'name' => 'last_target_filled',
				'vname' => 'LBL_LAST_TARGET_FILLED',
				'type' => 'varchar',
				'massupdate' => 0,
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
			);
		

		 
			$dictionary['Case']['fields']['alt1_quantity'] = array(
				'required' => false,
				'name' => 'alt1_quantity',
				'vname' => 'LBL_ALT1_QUANTITY',
				'type' => 'varchar',
				'massupdate' => 0,
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
			);
		

		 
			$dictionary['Case']['fields']['num_phys_resends_c'] = array(
				'required' => false,
				'name' => 'num_phys_resends_c',
				'vname' => 'LBL_NUM_PHYS_RESENDS',
				'type' => 'int',
				'massupdate' => 0,
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
				'enable_range_search' => false,
				'disable_num_format' => '',
				'min' => false,
				'max' => false,
			);
		

		 
			$dictionary['Case']['fields']['exclude_savings_c'] = array(
				'required' => false,
				'name' => 'exclude_savings_c',
				'label' => 'LBL_EXCLUDE_SAVINGS',
				'vname' => 'LBL_EXCLUDE_SAVINGS',
				'type' => 'bool',
				'massupdate' => 0,
				'default' => '0',
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
			);
		

		 
			$dictionary['Case']['fields']['target_description'] = array(
				'required' => false,
				'name' => 'target_description',
				'vname' => 'LBL_TARGET_DESCRIPTION',
				'type' => 'text',
				'massupdate' => 0,
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
				'calculated' => false,
				'size' => '20',
				'studio' => 'visible',
				'rows' => '20',
				'cols' => '80',
			);
		

 // created: 2018-03-13 12:03:52
$dictionary['Case']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

		 
			$dictionary['Case']['fields']['send_to_pharmacy_initial'] = array(
				'required' => false,
				'name' => 'send_to_pharmacy_initial',
				'label' => 'LBL_SEND_TO_PHARMACY_INITIAL',
				'vname' => 'LBL_SEND_TO_PHARMACY_INITIAL',
				'type' => 'bool',
				'massupdate' => 0,
				'default' => '0',
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
			);
		

		 
			$dictionary['Case']['fields']['alt1_description'] = array(
				'required' => false,
				'name' => 'alt1_description',
				'vname' => 'LBL_ALT1_DESCRIPTION',
				'type' => 'text',
				'massupdate' => 0,
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
				'calculated' => false,
				'size' => '20',
				'studio' => 'visible',
				'rows' => '20',
				'cols' => '80',
			);
		

		 
			$dictionary['Case']['fields']['last_alt_filled'] = array(
				'required' => false,
				'name' => 'last_alt_filled',
				'vname' => 'LBL_LAST_ALT_FILLED',
				'type' => 'varchar',
				'massupdate' => 0,
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
			);
		


$dictionary['Case']['fields']['status']['massupdate']=true;

 // created: 2018-03-13 12:03:51
$dictionary['Case']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 
 

	$dictionary['Case']['fields']['life_plan_type_c'] = array(
		'name' => 'life_plan_type_c',
		'vname' => 'LBL_LIFE_PLAN_TYPE',
		'massupdate' => false,
		'type' => 'varchar',
		'source'=>'non-db',
		'comment' => 'Life Plan Type',
	);

		 
			$dictionary['Case']['fields']['last_date_alt_filled'] = array(
				'required' => false,
				'name' => 'last_date_alt_filled',
				'vname' => 'LBL_LAST_DATE_ALT_FILLED',
				'type' => 'date',
				'massupdate' => 0,
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
				'calculated' => false,
				'size' => '20',
				'enable_range_search' => false,
			);
		

		 
			$dictionary['Case']['fields']['last_received_fax_c'] = array(
				'required' => false,
				'name' => 'last_received_fax_c',
				'vname' => 'LBL_LAST_RECEIVED_FAX',
				'type' => 'varchar',
				'massupdate' => 0,
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
			);
		
 

	$dictionary['Case']['fields']['phone_office_c'] = array(
		'name' => 'phone_office',
		'vname' => 'LBL_PHONE_OFFICE',
		'massupdate' => false,
		'type' => 'varchar',
		'source'=>'non-db',
		'comment' => 'Pharmacy Phone Office',
	);


		 
			$dictionary['Case']['fields']['target_cost'] = array(
				'required' => false,
				'name' => 'target_cost',
				'vname' => 'LBL_TARGETOST',
				'type' => 'varchar',
				'massupdate' => 0,
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
			);
		

 // created: 2018-03-13 12:03:51
$dictionary['Case']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2018-03-13 12:03:52
$dictionary['Case']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 


$dictionary['Case']['fields']['search_latest_notes_c'] = 
    array (
		'name' => 'search_latest_notes_c',
		'label' => 'LBL_SEARCH_NOTES',
		'vname' => 'LBL_SEARCH_NOTES',
		'comments' => NULL,
		'help' => NULL,
		'module' => 'Cases',
		'type' => 'date',
		'max_size' => NULL,
		'default_value' => NULL,
		'audited' => true,
		'mass_update' => '0',
		'duplicate_merge' => '0',
		'reportable' => '1',
		'importable' => 'true',
		'source' => 'non-db',
		'enable_range_search' => true,
    	'options' => 'custom_date_range_dom',
    );

		 
			$dictionary['Case']['fields']['cover_sheet_note'] = array(
				'required' => false,
				'name' => 'cover_sheet_note',
				'vname' => 'LBL_COVER_SHEET_NOTE',
				'type' => 'text',
				'massupdate' => 0,
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
				'calculated' => false,
				'size' => '20',
				'studio' => 'visible',
				'rows' => '20',
				'cols' => '80',
			);
		

		 
			$dictionary['Case']['fields']['alt1_direction'] = array(
				'required' => false,
				'name' => 'alt1_direction',
				'vname' => 'LBL_ALT1_DIRECTION',
				'type' => 'text',
				'massupdate' => 0,
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
				'calculated' => false,
				'size' => '20',
				'studio' => 'visible',
				'rows' => '20',
				'cols' => '80',
			);
		

		 
			$dictionary['Case']['fields']['archive'] = array(
				'required' => false,
				'name' => 'archive',
				'label' => 'LBL_ARCHIVE',
				'vname' => 'LBL_ARCHIVE',
				'type' => 'bool',
				'massupdate' => 0,
				'default' => '0',
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
			);
		

		 
			$dictionary['Case']['fields']['last_date_target_filled'] = array(
				'required' => false,
				'name' => 'last_date_target_filled',
				'vname' => 'LBL_LAST_DATE_TARGET_FILLED',
				'type' => 'date',
				'massupdate' => 0,
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
				'calculated' => false,
				'size' => '20',
				'enable_range_search' => false,
			);
		

		 
			$dictionary['Case']['fields']['alt1_cost'] = array(
				'required' => false,
				'name' => 'alt1_cost',
				'vname' => 'LBL_ALT1OST',
				'type' => 'varchar',
				'massupdate' => 0,
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
			);
		

		 
			$dictionary['Case']['fields']['send_fax'] = array(
				'required' => false,
				'name' => 'send_fax',
				'label' => 'LBL_SEND_FAX',
				'vname' => 'LBL_SEND_FAX',
				'type' => 'bool',
				'massupdate' => 0,
				'default' => '0',
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
			);
		
 

	$dictionary['Case']['fields']['search_notes_name_c'] = 
    array (
		'name' => 'search_notes_name_c',
		'label' => 'LBL_SEARCH_NOTES_NAME',
		'vname' => 'LBL_SEARCH_NOTES_NAME',
		'type' => 'varchar',
		'massupdate' => 0,
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
		'calculated' => false,
		'source' => 'non-db',
		'len' => '255',
		'size' => '20',
    );

		 
			$dictionary['Case']['fields']['send_to_pharmacy_c'] = array(
				'required' => false,
				'name' => 'send_to_pharmacy_c',
				'label' => 'LBL_SEND_TO_PHARMACY',
				'vname' => 'LBL_SEND_TO_PHARMACY',
				'type' => 'bool',
				'massupdate' => 0,
				'default' => '0',
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
			);
		
 

	$dictionary['Case']['fields']['active_groups_c'] = array(
		
		'required' => false,
		'source' => 'non-db',
		'name' => 'active_groups_c',
		'vname' => 'LBL_ACTIVE_GROUPS',
		'label' => 'LBL_ACTIVE_GROUPS',
		'type' => 'enum',
		'massupdate' => 0,
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
		'len' => 100,
		'size' => '20',
		'function' => 'getActiveGroups',
		'studio' => 'visible',
		'dependency' => false,
	);

		 
			$dictionary['Case']['fields']['life_approved_c'] = array(
				'required' => false,
				'name' => 'life_approved_c',
				'label' => 'LBL_LIFE_APPROVED',
				'vname' => 'LBL_LIFE_APPROVED',
				'type' => 'bool',
				'massupdate' => 0,
				'default' => '0',
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
			);
		

		 
			$dictionary['Case']['fields']['note_id'] = array(
				'required' => false,
				'name' => 'note_id',
				'vname' => 'LBL_NOTE_ID',
				'type' => 'varchar',
				'massupdate' => 0,
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
				'calculated' => false,
				'len' => '255',
				'size' => '20',
			);
		
?>