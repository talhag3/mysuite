<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
             
$layout_defs['fc_fbads'] = array(
    'subpanel_setup' => array(
        'fb_ad_leads' => array(
            'order' => 100,
             'module' => 'Leads',
             'subpanel_name' => 'default', // name of related modules panel
             'sort_order' => 'asc',
             'sort_by' => 'id',    
             'title_key' => 'LBL_LEADS_SPANEL_TITLE',
             'get_subpanel_data' => 'fb_ad_leads',
    
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