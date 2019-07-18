<?php
   
    $hook_array['after_save'][] = Array(
       99,
       'after_save Remove Target From All Target List ', // Comment
       'custom/modules/Leads/remove_TR_hook.php',
       'removeTRHook',//Class
       'removeTR'//Method
    );

?>