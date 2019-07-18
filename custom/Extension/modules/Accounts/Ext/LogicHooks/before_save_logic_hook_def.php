<?php
   // Only this Required For The Custom Extension -> modules -> 'Module' -> Ext
   $hook_array['before_save'][] = Array(
       1,
       'before_save example',
       'custom/modules/Accounts/account_hook.php',
       'Account_Hook',
       'update_fields_data'
   );

?>