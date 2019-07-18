<?php
// created: 2018-09-03 11:47:44
$dictionary["mt_book_sc_student_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'mt_book_sc_student_1' => 
    array (
      'lhs_module' => 'mt_book',
      'lhs_table' => 'mt_book',
      'lhs_key' => 'id',
      'rhs_module' => 'sc_student',
      'rhs_table' => 'sc_student',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mt_book_sc_student_1_c',
      'join_key_lhs' => 'mt_book_sc_student_1mt_book_ida',
      'join_key_rhs' => 'mt_book_sc_student_1sc_student_idb',
    ),
  ),
  'table' => 'mt_book_sc_student_1_c',
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
      'name' => 'mt_book_sc_student_1mt_book_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mt_book_sc_student_1sc_student_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mt_book_sc_student_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mt_book_sc_student_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mt_book_sc_student_1mt_book_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mt_book_sc_student_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mt_book_sc_student_1sc_student_idb',
      ),
    ),
  ),
);