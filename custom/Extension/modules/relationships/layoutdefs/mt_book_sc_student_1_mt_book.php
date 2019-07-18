<?php
 // created: 2018-09-03 11:47:44
$layout_defs["mt_book"]["subpanel_setup"]['mt_book_sc_student_1'] = array (
  'order' => 100,
  'module' => 'sc_student',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MT_BOOK_SC_STUDENT_1_FROM_SC_STUDENT_TITLE',
  'get_subpanel_data' => 'mt_book_sc_student_1',
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
