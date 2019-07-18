<?php 

	$dictionary['Case']['fields']['active_groups_c'] = array(
		
		'required' => false,
		'source' => 'non-db',
		'name' => 'active_groups_c',
		'vname' => 'LBL_ACTIVE_GROUPS',
		'label' => 'LBL_ACTIVE_GROUPS',
		'type' => 'enum',
		'massupdate' => 0,
		'no_default' => false,
		'comments' => '',
		'help' => '',
		'importable' => 'true',
		'duplicate_merge' => 'disabled',
		'duplicate_merge_dom_value' => '0',
		'audited' => false,
		'reportable' => true,
		'unified_search' => false,
		'merge_filter' => 'disabled',
		'len' => 100,
		'size' => '20',
		'function' => 'getActiveGroups',
		'studio' => 'visible',
		'dependency' => false,
	);