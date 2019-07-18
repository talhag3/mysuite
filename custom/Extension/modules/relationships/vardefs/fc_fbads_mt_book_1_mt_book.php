<?php
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
