<?php

echo "hi";
$seedAlert = new Alert();
$seedAlert->name = "TEST";
$seedAlert->description = "I'm testing";
$seedAlert->assigned_user_id = 1;
$seedAlert->is_read = 0 ;
$seedAlert->type = "info" ;
$seedAlert->target_module = "Tasks";
$seedAlert->url_redirect = "index.php";
$seedAlert->save();