<h1>Vista estudiantes</h1>

<?php
    $datos = $estudiantes->index();
    while($row = mysqli_fetch_array($datos))
    {
        echo $row['nombre'];
    }
?>
