<?php

$dictionary["accounts_books"] = array (
    'relationships' => 
    array (
      'accounts_books' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'mt_book',
        'rhs_table' => 'mt_book',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_books',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'book_id',
      ),
    ),
    'table' => 'accounts_books',
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
        'name' => 'book_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      
    ),
);

