<?php
$layout_defs["Accounts"]["subpanel_setup"]['myaccounts_mycalls'] = array ( //<subpanel key> = name of relationship,etc

    'order' => 100,
    'module' => 'Calls',
    'subpanel_name' => 'default', // name of related modules panel
    'sort_order' => 'asc',
    'sort_by' => 'id',    
    'title_key' => 'LBL_CALLS_SPANEL_TITLE',
    'get_subpanel_data' => 'myaccounts_mycalls_link',
    
    'top_buttons' => array (
        array (
          'widget_class' => 'SubPanelTopButtonQuickCreate',
        ),
        array (
          'widget_class' => 'SubPanelTopSelectButton',
          'mode' => 'MultiSelect',
        ),
    ),
    );

?>