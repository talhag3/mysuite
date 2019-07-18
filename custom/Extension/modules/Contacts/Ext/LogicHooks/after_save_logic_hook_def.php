<?php
   // Only this Required For The Custom Extension -> modules -> 'Module' -> Ext
   $hook_array['after_save'][] = Array(
       1,
       'after_save example',
       'custom/modules/Contacts/contacts_hook.php',
       'Contact_Hook',
       'contact_after_save'
   );

?>