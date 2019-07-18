<?php 
 //WARNING: The contents of this file are auto-generated


$layout_defs["Calls"]["subpanel_setup"]['myaccounts_mycalls'] = array ( //<subpanel key> = name of relationship,etc

    'order' => 100,
    'module' => 'Accounts',
    'subpanel_name' => 'default', // name of related modules panel
    'sort_order' => 'asc',
    'sort_by' => 'id',    
    'title_key' => 'LBL_ACCOUNTS_SPANEL_TITLE',
    'get_subpanel_data' => 'myaccounts_mycalls_link',
    
    'top_buttons' => array (
        0=>array (
          'widget_class' => 'SubPanelTopButtonQuickCreate',
        ),
        1=>array (
          'widget_class' => 'SubPanelTopSelectButton',
          'mode' => 'MultiSelect',
        ),
    ),
    );


?>