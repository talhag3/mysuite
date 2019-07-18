<?php
  
  /* global $db;
  $result = $db->query("SELECT * FROM accounts WHERE deleted=0 and name like 'A%'");
  
  while($row = $db->fetchByAssoc($result)){
    echo $row['name'].'<br>';
  }
   */

  /* echo "<pre>";
  print_r($app_list_strings['yes_no_list']); */
   
  
?>


<?php
/* global $beanList, $beanFiles;
 */



$bean = BeanFactory::getBean('Accounts');
$account_bean = $bean->retrieve_by_string_fields(['name'=>'465120']);
echo $account_bean->name; 



?>





<?php
    /*
     echo "<pre>";
      foreach($GLOBALS['app']->controller->bean->field_name_map as $key => $value)
      {
        echo "$key<br>";
      }
     echo "</pre><!-- Testing -->";
     $res = json_encode($GLOBALS['app']->controller->bean->field_name_map) ;
     echo "<script> console.log('Data',$res); alert('HelloWorld'); </script>";
    */
?>