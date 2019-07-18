<?php
  
  echo "Testing"; echo "<br>";
  global $timedate;
  
  echo $timedate->now(); 
  echo "<br>";
  
  
  $id = "a89f68be-a586-804e-dfbc-5aabe32f67f2";


   $bean = BeanFactory::getBean("Accounts",$id);
  
   echo "<pre>";
   print_r($bean->test_datetime_c);
   echo "</pre>";

   $bean->test_datetime_c = $timedate->asUser(new DateTime("06/27/2018 02:10am") );
   $bean->save();
   //-----------------/

   global $current_user;        
   $dateFormat = $current_user->getPreference('datef');
   echo $dateFormat;
   echo "<br>"; 
   //------------------------
   
  /*  $TimeDate = new TimeDate();
   echo "User Time Foramte   ".$TimeDate->fromUser("2017-08-29 16:05"); */
   
   echo $timedate->get_time_format();
   echo "<br>";
   
   //$d=strtotime("06/27/2018");
   //DateTime("06/27/2018");

   echo "AS USER TIME ".$timedate->asUser(new DateTime("2018-06-29 02:00am") ) ;


?>