<?php

$dictionary["opportunities_sendgrid_campaigns"] = array (
  'relationships' => 
  array (
    'opportunities_sendgrid_campaigns' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'pt_sendgrid_campaign',
      'rhs_table' => 'pt_sendgrid_campaign',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_sendgrid_campaigns',//Junction Table
      'join_key_lhs' => 'opportunity_id',
      'join_key_rhs' => 'sendgrid_campaign_id',
    ),
  ),
  'table' => 'opportunities_sendgrid_campaigns',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'opportunity_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sendgrid_campaign_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
);



?>
