<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$layout_defs['sc_teacher'] = array(
    'subpanel_setup' => array(
        'students_teacher' => array(
            'order' => 100,
             'module' => 'sc_student',
             'subpanel_name' => 'default', // name of related modules panel
             'sort_order' => 'asc',
             'sort_by' => 'id',    
             'title_key' => 'LBL_STUDENTS_SPANEL_TITLE',
             'get_subpanel_data' => 'students_teacher',
    
    'top_buttons' => array (
        array (
          'widget_class' => 'SubPanelTopButtonQuickCreate',
        ),
        array (
          'widget_class' => 'SubPanelTopSelectButton',
          'mode' => 'MultiSelect',
        ),
    
    ),
)
)
);