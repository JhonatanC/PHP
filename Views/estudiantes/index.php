<section class="container">

    <h1>Listado de estudiantes</h1>

    <article class="panel panel-success">
        <div class="panel-heading">
            <h3>Listado de estudiantes</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Promedio</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($datos)) { ?>
                        <tr>
                            <td> <img src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $row['imagen']; ?>"> </td>
                            <td> <?php echo $row['nombre']; ?> </td>
                            <td> <?php echo $row['edad']; ?> </td>
                            <td> <?php echo $row['promedio']; ?> </td>
                            <td>
                                <a class="btn btn-primary" href="<?php echo URL; ?>estudiantes/editar/<?php echo $row['id']; ?>">Editar</a>
                                <a class="btn btn-danger" href="<?php echo URL; ?>estudiantes/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </article>

</section>
