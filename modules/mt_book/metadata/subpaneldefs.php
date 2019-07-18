<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
             
$layout_defs['mt_book'] = array(
    'subpanel_setup' => array(
        'books_students' => array(
            'order' => 100,
             'module' => 'sc_student',
             'subpanel_name' => 'default', // name of related modules panel
             'sort_order' => 'asc',
             'sort_by' => 'id',    
             'title_key' => 'LBL_STUDENT_SPANEL_TITLE',
             'get_subpanel_data' => 'books_students',
    
            'top_buttons' => array (
                array (
                'widget_class' => 'SubPanelTopButtonQuickCreate',
                ),
                array (
                'widget_class' => 'SubPanelTopSelectButton',
                'mode' => 'MultiSelect',
                ),
            
            ),
        ),
    )
);