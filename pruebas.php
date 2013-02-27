<?php 


    // Include ezSQL core
       include_once "clases/ez_sql_core.php";
 
   // Include ezSQL database specific component (in this case mySQL)
       include_once "clases/ez_sql_mysql.php";
 
   // Initialise database object and establish a connection
  // at the same time - db_user / db_password / db_name / db_host
       
        $db = new ezSQL_mysql('root','','nosugar','localhost');

$queryRegister = "SELECT * FROM nosugar_users";
$usersRegister = $db->get_results($queryRegister);

print_r($usersRegister);

foreach ($usersRegister as $value) {
  echo $value->id;
  echo $value->user_login;
  echo $value->user_nicename.'<br>';
}
 ?>