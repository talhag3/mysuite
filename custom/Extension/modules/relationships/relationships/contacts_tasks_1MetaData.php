<?php
// created: 2018-03-19 14:07:30
$dictionary["contacts_tasks_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_tasks_1' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_tasks_1_c',
      'join_key_lhs' => 'contacts_tasks_1contacts_ida',
      'join_key_rhs' => 'contacts_tasks_1tasks_idb',
    ),
  ),
  'table' => 'contacts_tasks_1_c',
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
      'name' => 'contacts_tasks_1contacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'contacts_tasks_1tasks_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'contacts_tasks_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'contacts_tasks_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contacts_tasks_1contacts_ida',
        1 => 'contacts_tasks_1tasks_idb',
      ),
    ),
  ),
);