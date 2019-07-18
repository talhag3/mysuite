<?php

$dictionary["books_students"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'books_students' => 
    array (
      'lhs_module' => 'mt_book',
      'lhs_table' => 'mt_book',
      'lhs_key' => 'id',
      'rhs_module' => 'sc_student',
      'rhs_table' => 'sc_student',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'books_students',
      'join_key_lhs' => 'book_id',
      'join_key_rhs' => 'student_id',
    ),
  ),
  'table' => 'books_students',
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
      'name' => 'book_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'student_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'books_studentspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    
),
);