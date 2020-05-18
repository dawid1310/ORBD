<?php
/*
$tns = "  
(DESCRIPTION =
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
    )
    (CONNECT_DATA =
      (SERVICE_NAME = orcl)
    )
  )
       ";
$db_username = "SYSTEM";
$db_password = "root";
try{
    $conn = new PDO("oci:dbname=".$tns,$db_username,$db_password);
}catch(PDOException $e){
    echo ($e->getMessage());
}

*/



session_start();
require 'core/bootstrap.php';
//$a = $app['database']->selectAll('sys.tabela');
//var_dump($a);
require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
    
    ?>
