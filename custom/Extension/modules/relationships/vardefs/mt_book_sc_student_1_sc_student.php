<?php
// created: 2018-09-03 11:47:44
$dictionary["sc_student"]["fields"]["mt_book_sc_student_1"] = array (
  'name' => 'mt_book_sc_student_1',
  'type' => 'link',
  'relationship' => 'mt_book_sc_student_1',
  'source' => 'non-db',
  'module' => 'mt_book',
  'bean_name' => 'mt_book',
  'vname' => 'LBL_MT_BOOK_SC_STUDENT_1_FROM_MT_BOOK_TITLE',
  'id_name' => 'mt_book_sc_student_1mt_book_ida',
);
$dictionary["sc_student"]["fields"]["mt_book_sc_student_1_name"] = array (
  'name' => 'mt_book_sc_student_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MT_BOOK_SC_STUDENT_1_FROM_MT_BOOK_TITLE',
  'save' => true,
  'id_name' => 'mt_book_sc_student_1mt_book_ida',
  'link' => 'mt_book_sc_student_1',
  'table' => 'mt_book',
  'module' => 'mt_book',
  'rname' => 'name',
);
$dictionary["sc_student"]["fields"]["mt_book_sc_student_1mt_book_ida"] = array (
  'name' => 'mt_book_sc_student_1mt_book_ida',
  'type' => 'link',
  'relationship' => 'mt_book_sc_student_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MT_BOOK_SC_STUDENT_1_FROM_SC_STUDENT_TITLE',
);
