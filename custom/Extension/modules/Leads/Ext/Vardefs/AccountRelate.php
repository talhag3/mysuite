<?php
$dictionary['Leads']['fields']['account_info'] = array(
    'name' => 'account_info',
    'type' => 'link',
    'relationship' => 'my_accounts_leads',
    'module' => 'Accounts',
    'bean_name' => 'Account',
    'source' => 'non-db',
    'vname' => 'Accounts',
);