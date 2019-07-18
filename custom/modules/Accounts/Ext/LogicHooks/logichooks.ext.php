<?php 
 //WARNING: The contents of this file are auto-generated


   // Only this Required For The Custom Extension -> modules -> 'Module' -> Ext
   $hook_array['before_save'][] = Array(
       1,
       'before_save example',
       'custom/modules/Accounts/account_hook.php',
       'Account_Hook',
       'update_fields_data'
   );



   // Only this Required For The Custom Extension -> modules -> 'Module' -> Ext
   $hook_array['after_save'][] = Array(
       90,      //execution order
       'Updating country and dropdown fields from description',     //description 
       'custom/modules/Accounts/account_hook.php',
       'Account_Hook',
       'after_save_method'      //function name
    );


   // Only this Required For The Custom Extension -> modules -> 'Module' -> Ext
   $hook_array['after_delete'][] = Array(
       1,
       'after_delete example',
       'custom/modules/Accounts/account_hook.php',
       'Account_Hook',
       'after_delete_method'
   );



   $hook_array['process_record'][] = Array(
    99,
    'Testing Process Record ', // Comment
    'custom/modules/Accounts/account_hook.php', // File Path 
    'Account_Hook', // Class name -> Hook Class 
    'process_record_method' // Method name of Hook Class 
);


?>