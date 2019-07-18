<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary['mt_book']['fields']['description']['unified_search'] = true;
$dictionary['mt_book']['fields']['description']['full_text_search']= array (
    'boost' => 3,
);

// created: 2018-09-03 11:47:44
$dictionary["mt_book"]["fields"]["mt_book_sc_student_1"] = array (
  'name' => 'mt_book_sc_student_1',
  'type' => 'link',
  'relationship' => 'mt_book_sc_student_1',
  'source' => 'non-db',
  'module' => 'sc_student',
  'bean_name' => 'sc_student',
  'side' => 'right',
  'vname' => 'LBL_MT_BOOK_SC_STUDENT_1_FROM_SC_STUDENT_TITLE',
);


// created: 2018-09-04 20:01:19
$dictionary["mt_book"]["fields"]["fc_fbads_mt_book_1"] = array (
  'name' => 'fc_fbads_mt_book_1',
  'type' => 'link',
  'relationship' => 'fc_fbads_mt_book_1',
  'source' => 'non-db',
  'module' => 'fc_fbads',
  'bean_name' => 'fc_fbads',
  'vname' => 'LBL_FC_FBADS_MT_BOOK_1_FROM_FC_FBADS_TITLE',
  'id_name' => 'fc_fbads_mt_book_1fc_fbads_ida',
);
$dictionary["mt_book"]["fields"]["fc_fbads_mt_book_1_name"] = array (
  'name' => 'fc_fbads_mt_book_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FC_FBADS_MT_BOOK_1_FROM_FC_FBADS_TITLE',
  'save' => true,
  'id_name' => 'fc_fbads_mt_book_1fc_fbads_ida',
  'link' => 'fc_fbads_mt_book_1',
  'table' => 'fc_fbads',
  'module' => 'fc_fbads',
  'rname' => 'name',
);
$dictionary["mt_book"]["fields"]["fc_fbads_mt_book_1fc_fbads_ida"] = array (
  'name' => 'fc_fbads_mt_book_1fc_fbads_ida',
  'type' => 'link',
  'relationship' => 'fc_fbads_mt_book_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_FC_FBADS_MT_BOOK_1_FROM_MT_BOOK_TITLE',
);


 // created: 2018-06-22 16:30:16
$dictionary['mt_book']['fields']['multi_enum_c']['inline_edit']='1';
$dictionary['mt_book']['fields']['multi_enum_c']['labelValue']='Mutli Enum';

 
?>