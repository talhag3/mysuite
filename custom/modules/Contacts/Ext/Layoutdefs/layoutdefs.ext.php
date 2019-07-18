<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-03-19 14:07:30
$layout_defs["Contacts"]["subpanel_setup"]['contacts_tasks_1'] = array (
  'order' => 100,
  'module' => 'Tasks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_TASKS_1_FROM_TASKS_TITLE',
  'get_subpanel_data' => 'contacts_tasks_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


$layout_defs["Contacts"]["subpanel_setup"]['contacts_sendgrid_campaigns'] = array (
  'order' => 999,
  'module' => 'pt_sendgrid_campaign',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SENDGRID_CAMPAIGNS_TITLE',
  'get_subpanel_data' => 'contacts_sendgrid_campaigns',
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

?>