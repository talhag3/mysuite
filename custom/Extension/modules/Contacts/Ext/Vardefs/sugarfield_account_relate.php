<?php
$dictionary['Contact']['fields']['account_relate_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'account_relate_name',
    'vname'     => 'LBL_ACCOUNT_RELATE_NAME',
    'type'      => 'relate',
    'rname'     => 'website',
    'id_name'   => 'account_relate_id',
    'module'    => 'Accounts',
    'comment'   => "Account",
    'len'       => '255',
    'size'      => '20',
    'studio'    => 'visible',
    'ext2'      => 'Accounts',
    'default'   => NULL,
    'no_default' => false,
);
    
// Id Field 
$dictionary['Contact']['fields']['account_relate_id'] = array(
    'name'              => 'account_relate_id',
    'rname'             => 'id',
    'vname'             => 'LBL_ACCOUNT_RELATE_ID',
    'type'              => 'id',
    'table'             => 'accounts',
    'isnull'            => 'true',
    'module'            => 'Accounts',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    'len'               => '36',
    'size'              => '20',
    'default' => NULL,
    'no_default' => false,
);

