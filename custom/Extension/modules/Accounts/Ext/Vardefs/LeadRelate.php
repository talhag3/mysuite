<?php

// Relate Field
$dictionary['Account']['fields']['lead_relate_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'lead_relate_name',
    'vname'     => 'LBL_LEAD_RELATE_NAME',
    'type'      => 'relate',
    'rname'     => 'title',
    'id_name'   => 'lead_relate_id',
    'link'      => 'my_leads',
    'module'    => 'Leads',
);
    
// Id Field 
$dictionary['Account']['fields']['lead_relate_id'] = array(
    'name'              => 'lead_relate_id',
    'rname'             => 'id',
    'vname'             => 'LBL_LEAD_RELATE_ID',
    'type'              => 'id',
    'table'             => 'leads',
    'isnull'            => 'true',
    'module'            => 'Leads',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);

// Link Field 
$dictionary['Account']['fields']['my_leads'] = array(
  	'name'          => 'my_leads',
    'type'          => 'link',
    'relationship'  => 'my_accounts_leads',
    'module'        => 'Leads',
    'bean_name'     => 'Lead',
    'source'        => 'non-db',
    'vname'         => 'LEADS',
);

// Relation Ship 
$dictionary['Account']['relationships']['my_accounts_leads'] = array(
    'lhs_module'		=> 'Leads',
    'lhs_table'			=> 'leads',
    'lhs_key'			=> 'id',
    'rhs_module'		=> 'Accounts',
    'rhs_table'			=> 'accounts',
    'rhs_key'			=> 'lead_relate_id',
    'relationship_type'	=> 'one-to-many',
);
