<?php

class Connection{
    public static function make($config){
        $pdo_string = 'oci:dbname='.$config['string'];
        try{
        /*
            return new PDO(
                $pdo_string,
                $config['username'],
                $config['password'],
                $config['options']
            );*/

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

             return new PDO("oci:dbname=".$tns,$db_username,$db_password);
        }catch(PDOException $e){
                //die(
                    echo $e->getMessage();
                //);
            }
    }
}