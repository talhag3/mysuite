<?php
$module_name = 'sc_student';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          0 => 
          array (
            'name' => 'lectures',
            'label' => 'LBL_LECTURES',
          ),
          1 => 
          array (
            'name' => 'lab_id',
            'label' => 'LBL_LAB_ID',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'roll_no',
            'label' => 'LBL_STU_ROLLNO',
          ),
          1 => 
          array (
            'name' => 'teacher_name',
            'label' => 'LBL_TEACHER_NAME',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'my_currency_c',
            'label' => 'LBL_MY_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'mt_book_sc_student_1_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
