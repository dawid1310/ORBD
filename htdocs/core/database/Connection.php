<?php
class Connection{
    public static function make($config){
        $pdo_string = 'oci:dbname='.$config['string'];
        try{
        
            return new PDO(
                $pdo_string,
                $config['username'],
                $config['password'],
                $config['options']
            );
        }catch(PDOException $e){
                die($e->getMessage());
            }
    }
}