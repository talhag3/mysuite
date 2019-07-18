<?php
 $dictionary['Account']['fields']['meetings_info'] = array(
    'name' => 'meetings_info',
    'type' => 'link',
    'relationship' => 'account_R_meetings',
    'module' => 'Meetings',
    'bean_name' => 'Meeting',
    'source' => 'non-db',
    'vname' => 'Meetings Info',
 );