// Many Side 

<?php
// Relate Field
$dictionary['Meeting']['fields']['account_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'account_name',

    'vname'     => 'Account Name',
    'type'      => 'relate',
    'rname'     => 'name',

    'id_name'   => 'account_id_fk',
    'link'      => 'account_link',
    'module'    => 'Accounts',
);
    
// Id Field 
$dictionary['Meeting']['fields']['account_id_fk'] = array(
    'name'              => 'account_id_fk',
    'rname'             => 'id',
    'vname'             => 'Account Id Fk',
    'type'              => 'id',
    'table'             => 'accounts',
    'isnull'            => 'true',
    'module'            => 'Accounts',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);

// Link Field 
$dictionary['Meeting']['fields']['account_link'] = array(
  	'name'          => 'account_link',
    'type'          => 'link',
    'relationship'  => 'account_R_meetings',
    'module'        => 'Accounts',
    'bean_name'     => 'Account',
    'source'        => 'non-db',
    'vname'         => 'Accounts ->',
);

// Relation Ship 
$dictionary['Meeting']['relationships']['account_R_meetings'] = array(
    'lhs_module'		=> 'Accounts',
    'lhs_table'			=> 'accounts',
    'lhs_key'			=> 'id',
    
    'rhs_module'		=> 'Meetings',
    'rhs_table'			=> 'meetings',
    'rhs_key'			=> 'account_id_fk',
    'relationship_type'	=> 'one-to-many',
);

?>