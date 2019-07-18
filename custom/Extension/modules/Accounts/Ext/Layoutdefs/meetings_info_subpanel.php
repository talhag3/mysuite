<?php
$layout_defs["Accounts"]["subpanel_setup"]['meetings_info'] = array ( //<subpanel key> = name of relationship,etc

    'order' => 100,
    'module' => 'Meetings',
    'subpanel_name' => 'default', // name of related modules panel
    'sort_order' => 'asc',
    'sort_by' => 'id',    
    'title_key' => 'LBL_MEETINGS_INFO_TITLE',
    'get_subpanel_data' => 'meetings_info',
    
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