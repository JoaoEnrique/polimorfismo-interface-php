<?php
class Televisao implements ControladorInterface{
    private static $status = false;
    
    function ligar(){
        self::$status = true;
        echo "TV ligada\n";
    }

    function desligar(){
        self::$status = false;
        echo "TV desligada\n";
    }

    static function getStatus(){
        return self::$status;
    }

    static function setStatus($status){
        self::$status = $status;
    }
}