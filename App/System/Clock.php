<?php

namespace App\System;

date_default_timezone_set('America/Sao_Paulo');


class Clock{
    private function __clone(){}
    private function __construct(){}
    public static function today(){
        return date("Y-m-d H:m:s");
    }
    public static function Day(){
        return date("d");
    }
    public static function Year(){
        return date("Y");
    }
    public static function Month(){
        return date("m");
    }

    public static function Hours(){
        return date("H");
    }
    public static function Minute(){
        return date("m");
    }
    public static function Seconds(){
        return date("s");
    }
}