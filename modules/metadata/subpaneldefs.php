<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
             

$layout_defs['pt_sendgrid_campaign']= array(
    'subpanel_setup' => array(
        'accounts_sendgrid_campaigns' => array(
            'order' => 100,
            'module' => 'Accounts',
            'subpanel_name' => 'default', 
            'sort_order' => 'asc',
            'sort_by' => 'id',    
            'title_key' => 'LBL_ACCOUNTS_SPANEL_TITLE',
            'get_subpanel_data' => 'accounts_sendgrid_campaigns',//Link Name
    
            'top_buttons' => array (
                0=>array (
                'widget_class' => 'SubPanelTopCreateButton',
                ),
                1=>array (
                'widget_class' => 'SubPanelTopSelectButton',
                'mode' => 'MultiSelect',
                ),
            ),
        ),
        'contacts_sendgrid_campaigns' => array(
            'order' => 100,
            'module' => 'Contacts',
            'subpanel_name' => 'default', 
            'sort_order' => 'asc',
            'sort_by' => 'id',    
            'title_key' => 'LBL_CONTACTS_SPANEL_TITLE',
            'get_subpanel_data' => 'contacts_sendgrid_campaigns',//Link Name
    
            'top_buttons' => array (
                0=>array (
                'widget_class' => 'SubPanelTopCreateButton',
                ),
                1=>array (
                'widget_class' => 'SubPanelTopSelectButton',
                'mode' => 'MultiSelect',
                ),
            ),
        ),
        'leads_sendgrid_campaigns' => array(
            'order' => 100,
            'module' => 'Leads',
            'subpanel_name' => 'default', 
            'sort_order' => 'asc',
            'sort_by' => 'id',    
            'title_key' => 'LBL_LEADS_SPANEL_TITLE',
            'get_subpanel_data' => 'leads_sendgrid_campaigns',//Link Name
    
            'top_buttons' => array (
                0=>array (
                'widget_class' => 'SubPanelTopCreateButton',
                ),
                1=>array (
                'widget_class' => 'SubPanelTopSelectButton',
                'mode' => 'MultiSelect',
                ),
            ),
        ),
        'opportunities_sendgrid_campaigns' => array(
            'order' => 100,
            'module' => 'Opportunities',
            'subpanel_name' => 'default', 
            'sort_order' => 'asc',
            'sort_by' => 'id',    
            'title_key' => 'LBL_OPPORTUNITIES_SPANEL_TITLE',
            'get_subpanel_data' => 'opportunities_sendgrid_campaigns',//Link Name
    
            'top_buttons' => array (
                0=>array (
                'widget_class' => 'SubPanelTopCreateButton',
                ),
                1=>array (
                'widget_class' => 'SubPanelTopSelectButton',
                'mode' => 'MultiSelect',
                ),
            ),
        ),
    )
);