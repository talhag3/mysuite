<?php 
 //WARNING: The contents of this file are auto-generated


  // Remove Create Button From Lead Subpanel in Accounts Module 
     $layout_defs['Accounts']['subpanel_setup']['leads']['top_buttons']= array();


$layout_defs["Accounts"]["subpanel_setup"]['accounts_sendgrid_campaigns'] = array (
  'order' => 999,
  'module' => 'pt_sendgrid_campaign',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SENDGRID_CAMPAIGNS_TITLE',
  'get_subpanel_data' => 'accounts_sendgrid_campaigns',
  'top_buttons' =>
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    )
  ),
);


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