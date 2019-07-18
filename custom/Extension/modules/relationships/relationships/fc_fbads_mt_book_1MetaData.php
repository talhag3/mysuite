<?php
// created: 2018-09-04 20:01:19
$dictionary["fc_fbads_mt_book_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'fc_fbads_mt_book_1' => 
    array (
      'lhs_module' => 'fc_fbads',
      'lhs_table' => 'fc_fbads',
      'lhs_key' => 'id',
      'rhs_module' => 'mt_book',
      'rhs_table' => 'mt_book',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'fc_fbads_mt_book_1_c',
      'join_key_lhs' => 'fc_fbads_mt_book_1fc_fbads_ida',
      'join_key_rhs' => 'fc_fbads_mt_book_1mt_book_idb',
    ),
  ),
  'table' => 'fc_fbads_mt_book_1_c',
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
      'name' => 'fc_fbads_mt_book_1fc_fbads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'fc_fbads_mt_book_1mt_book_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'fc_fbads_mt_book_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'fc_fbads_mt_book_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'fc_fbads_mt_book_1fc_fbads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'fc_fbads_mt_book_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'fc_fbads_mt_book_1mt_book_idb',
      ),
    ),
  ),
);