<?php

$hook_array['after_ui_footer'][] = Array(
    //Processing index. For sorting the array.
    1, 
    
    //Label. A string value to identify the hook.
    'after_ui_frame example', 
    
    //The PHP file where your class is located.
    'custom/include/AnnotatedChart/google_chart_hook.php', 
    
    //The class the method is in.
    'logic_hooks_class', 
    
    //The method to call.
    'after_ui_frame_method' 
);
