<?php
$module_name = 'fc_fbads';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
        ),
        2 => 
        array (
          0 => 'fbcampaign_name',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'account_name_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_NAME',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 'ad_budget',
        ),
      ),
    ),
  ),
);
;
?>
