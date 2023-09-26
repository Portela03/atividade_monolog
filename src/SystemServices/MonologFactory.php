<?php

namespace App\SystemServices;

use Monolog\Level;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class MonologFactory{


    private static $logger;
    
    
    public static function getInstancia(){

        if (self::$logger == null){
            self::$logger = new Logger("TESTE");
            self::$logger ->pushHandler(new StreamHandler('meusLogs.log', level::Debug));
            return self::$logger ;
        }
        else{
            return self::$logger->error("ocorreu um teste");
        }


    }




};