<?php
namespace Utel\Util;

class Config {

    private static function getBaseDir(): String {
        $dir = dirname(__DIR__, 2);
        return $dir;
    }

    public static function getView(String $vista): String {
        return Config::getBaseDir() . "/src/views/$vista.view.php";
    }

}

?>