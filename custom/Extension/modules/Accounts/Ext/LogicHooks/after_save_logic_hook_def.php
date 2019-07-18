<?php
   // Only this Required For The Custom Extension -> modules -> 'Module' -> Ext
   $hook_array['after_save'][] = Array(
       90,      //execution order
       'Updating country and dropdown fields from description',     //description 
       'custom/modules/Accounts/account_hook.php',
       'Account_Hook',
       'after_save_method'      //function name
    );
?>