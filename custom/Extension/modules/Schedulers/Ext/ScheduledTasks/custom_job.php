<?php

    array_push($job_strings, 'custom_job');
    function custom_job()
    {   
        $GLOBALS['log']->fatal("**************************");
        $GLOBALS['log']->fatal("Hi this Custom Job.......");
        $GLOBALS['log']->fatal("**************************");
        
        return true;
    }