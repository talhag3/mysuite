<?php
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
