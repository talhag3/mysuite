<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$job_strings[100] = 'printOnLogFile';

function printOnLogFile(){
    $GLOBALS['log']->fatal('*******************');
    $GLOBALS['log']->fatal('Hello From Scheduler Job :) ');
    $GLOBALS['log']->fatal('*******************');
    return true;
}