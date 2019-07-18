<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
             
$layout_defs['fc_fbcampaigns'] = array(
    'subpanel_setup' => array(
        'fb_ad_leads' => array(
            'order' => 100,
             'module' => 'fc_fbads',
             'subpanel_name' => 'default', // name of related modules panel
             'sort_order' => 'asc',
             'sort_by' => 'id',    
             'title_key' => 'LBL_FB_ADS_SPANEL_TITLE',
             'get_subpanel_data' => 'fbcampaign_ads',
    
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