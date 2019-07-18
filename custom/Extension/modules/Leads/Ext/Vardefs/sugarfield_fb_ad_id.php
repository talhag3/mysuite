<?php

// Relate Field
$dictionary['Lead']['fields']['fb_ad_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'fb_ad_name',
    'vname'     => 'LBL_FB_AD_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'fb_ad_id',
    'link'      => 'contacts_cases_cstm',
    'module'    => 'fc_fbads',
);
    
// Id Field 
$dictionary['Lead']['fields']['fb_ad_id'] = array(
    'name'              => 'fb_ad_id',
    'rname'             => 'id',
    'vname'             => 'LBL_FB_AD_ID',
    'type'              => 'id',
    'table'             => 'fc_fbads',
    'isnull'            => 'true',
    'module'            => 'fc_fbads',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);