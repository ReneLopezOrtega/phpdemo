<?php
namespace Utel\Util;

use PDO;
use PDOException;

class DataSource {

    public static function getConnection() {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=matricula','root','12345');
            return $conexion;
        } catch(PDOException $e) {
            Config::getLogger()->error($e->getMessage());
            throw $e;
        }
    }

}

?>