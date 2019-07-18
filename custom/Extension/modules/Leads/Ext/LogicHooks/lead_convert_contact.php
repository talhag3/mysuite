<?php
   
   $hook_array['after_save'][] = Array(
       90,      //execution order
       'Lead Converted to Contact',    
       'custom/modules/Leads/leads_hook.php',
       'Lead_Hook',
       'add_contact_to_targetList'   
    );
?>