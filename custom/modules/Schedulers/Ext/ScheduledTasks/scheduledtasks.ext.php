<?php 
 //WARNING: The contents of this file are auto-generated



    array_push($job_strings, 'custom_job');
    function custom_job()
    {   
        $GLOBALS['log']->fatal("**************************");
        $GLOBALS['log']->fatal("Hi this Custom Job.......");
        $GLOBALS['log']->fatal("**************************");
        
        return true;
    }
?>