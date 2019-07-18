<?php
   $hook_array['process_record'][] = Array(
    99,
    'Testing Process Record ', // Comment
    'custom/modules/Accounts/account_hook.php', // File Path 
    'Account_Hook', // Class name -> Hook Class 
    'process_record_method' // Method name of Hook Class 
);

?>