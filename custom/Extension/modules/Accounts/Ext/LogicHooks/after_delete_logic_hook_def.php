<?php
   // Only this Required For The Custom Extension -> modules -> 'Module' -> Ext
   $hook_array['after_delete'][] = Array(
       1,
       'after_delete example',
       'custom/modules/Accounts/account_hook.php',
       'Account_Hook',
       'after_delete_method'
   );

?>