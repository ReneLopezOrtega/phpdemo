<?php
namespace Utel\Util;

use PDO;
use PDOException;

class DataSource {

    public static function getConnection() {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=matricula','root','');
            return $conexion;
        } catch(PDOException $e) {
            // TODO: Implementar manejo de excepción
            throw $e;
        }
    }

}

?>