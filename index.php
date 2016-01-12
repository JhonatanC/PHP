<?php
    /**
     * Url amigables
     */
	define('DS', DIRECTORY_SEPARATOR);
    /**
     * Ruta de archivos
     */
    define('ROOT', realpath(dirname(__FILE__)) . DS);

    define('URL','http://localhost/PHP/');

    require_once "Config/Autoload.php";
    Config\AutoLoad::run();
    require_once "Views/template.php";
    Config\Enrutador::run(new Config\Request());

?>