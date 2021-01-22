<?php
require __DIR__ . '/../vendor/autoload.php';

use Utel\Util\Config;
use Utel\Util\DataSource;

try {
    $conexion = DataSource::getConnection();
    $sentencia = $conexion->prepare("SELECT * FROM usuario WHERE rol=2");
    $sentencia->execute();
    $usuarios = $sentencia->fetchAll(PDO::FETCH_NAMED);
    // require '../src/views/index.view.php';
    require Config::getView('index');
} catch(PDOException $e) {
    $codigoError = $e->getCode();
    require Config::getView('error');
}
?>