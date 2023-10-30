<?php

namespace App\System;

date_default_timezone_set('America/Sao_Paulo');


class Clock{
    private function __clone(){}
    private function __construct(){}
    public static function today(){
        return date("Y-m-d H:m:s");
    }
}