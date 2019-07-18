<?php
// Relation Ship 
 $dictionary['Lead']['relationships']['fb_ad_leads'] = array(
    'lhs_module'		=> 'fc_fbads',
    'lhs_table'			=> 'fc_fbads',
    'lhs_key'			=> 'id',
    'rhs_module'		=> 'Leads',
    'rhs_table'			=> 'leads',
    'rhs_key'			=> 'fb_ad_id',
    'relationship_type'	=> 'one-to-many',
 );
?>