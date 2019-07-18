<?php

$dictionary['Case']['fields']['search_latest_notes_c'] = 
    array (
		'name' => 'search_latest_notes_c',
		'label' => 'LBL_SEARCH_NOTES',
		'vname' => 'LBL_SEARCH_NOTES',
		'comments' => NULL,
		'help' => NULL,
		'module' => 'Cases',
		'type' => 'date',
		'max_size' => NULL,
		'default_value' => NULL,
		'audited' => true,
		'mass_update' => '0',
		'duplicate_merge' => '0',
		'reportable' => '1',
		'importable' => 'true',
		'source' => 'non-db',
		'enable_range_search' => true,
    	'options' => 'custom_date_range_dom',
    );