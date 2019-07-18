<?php 
 //WARNING: The contents of this file are auto-generated


   
    $hook_array['after_save'][] = Array(
       99,
       'after_save Remove Target From All Target List ', // Comment
       'custom/modules/Leads/remove_TR_hook.php',
       'removeTRHook',//Class
       'removeTR'//Method
    );



   
   $hook_array['after_save'][] = Array(
       90,      //execution order
       'Lead Converted to Contact',    
       'custom/modules/Leads/leads_hook.php',
       'Lead_Hook',
       'add_contact_to_targetList'   
    );

?>