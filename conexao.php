<?php

class Conexao{
    public static $instance;
    
    private function __construct() {
        
    }
    
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('pgsql:host=bwjn0f5nbmcqikcrukjh-postgresql.services.clever-cloud.com;
           dbname=bwjn0f5nbmcqikcrukjh',
                'utvkbvo93frb1bep5u0w', 'jkrnCbntPcMZOnKviE7m2bNzl0yLJ6');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS,
                PDO::NULL_EMPTY_STRING);
        }
        
        return self::$instance;
    }
    
}
?>
