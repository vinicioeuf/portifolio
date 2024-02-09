<?php

class Conexao{
    public static $instance;
    
    private function __construct() {
        
    }
    
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('pgsql:host=ec2-35-169-9-79.compute-1.amazonaws.com;
           dbname=d4377ojrri8vrc',
                'lmzampblrqbgyd', '0aa958d2b23dfac467f50351a3a838059e3e249a52f0f2198105f3a3e79a3f42');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS,
                PDO::NULL_EMPTY_STRING);
        }
        
        return self::$instance;
    }
    
}
?>
