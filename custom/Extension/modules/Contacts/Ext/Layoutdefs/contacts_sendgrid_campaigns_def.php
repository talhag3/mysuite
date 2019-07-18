<?php
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
