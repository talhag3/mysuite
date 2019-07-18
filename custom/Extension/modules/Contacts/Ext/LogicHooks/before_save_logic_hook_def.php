<?php
   // Only this Required For The Custom Extension -> modules -> 'Module' -> Ext
   $hook_array['before_save'][] = Array(
       1,
       'before_save example',
       'custom/modules/Contacts/contacts_hook.php',
       'Contact_Hook',
       'contact_before_save'
   );

?>