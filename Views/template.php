<?php

    namespace Views;

    $template = new Template();

    class Template{

        public function __construct()
        {
            ?>
                <!doctype html>
                <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <title>Administración de estudiantes</title>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
                    <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/style.css"/>
                </head>
                <body>
            <?php
        }

        public function __destruct()
        {
            ?>
                </body>
                </html>
            <?php
        }

    }

?>