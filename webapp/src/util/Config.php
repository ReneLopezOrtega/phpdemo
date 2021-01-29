<?php
namespace Utel\Util;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Config {

    private static function getBaseDir(): String {
        $dir = dirname(__DIR__, 2);
        return $dir;
    }

    public static function getView(String $vista): String {
        return Config::getBaseDir() . "/src/views/$vista.view.php";
    }

    public static function getLogger(): Logger {
        $log = new Logger('PHPDemo');
        $archivo = Config::getBaseDir() . '/logs/mensajes.log';
        $controlador = new StreamHandler($archivo, Logger::DEBUG);
        $log->pushHandler($controlador);
        return $log;
    }



}

?>