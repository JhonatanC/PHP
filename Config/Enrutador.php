<?php

    namespace Config;

    class Enrutador{

        public static function run (Request $request)
        {
            $controlador = $request->getControlador() . "Controller";
            print $controlador;
        }

    }

?>