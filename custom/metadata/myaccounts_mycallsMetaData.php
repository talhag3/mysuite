<?php

$dictionary["myaccounts_mycalls"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'myaccounts_mycalls' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'myaccounts_mycalls',
      'join_key_lhs' => 'account_id',
      'join_key_rhs' => 'call_id',
    ),
  ),
  'table' => 'myaccounts_mycalls',
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
      'name' => 'account_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'call_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'myaccounts_mycallspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    
),
);