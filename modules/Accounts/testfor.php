<?php
// Test For Load Relationship 
// Test Record id ->    a89f68be-a586-804e-dfbc-5aabe32f67f2

$bean = BeanFactory::getBean('Accounts','a89f68be-a586-804e-dfbc-5aabe32f67f2');

echo $bean->name;

echo "<br>";

// load relationship 
$link = 'emails';
if($bean->load_relationship($link)){
   echo $link."    ... Relationship Loaded ";echo "<br>";
   $rel_beans = $bean->$link->getBeans();
    foreach ($rel_beans as $rel_bean) {
       echo $rel_bean->name;echo "<br>";
    }
}