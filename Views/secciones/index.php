<section class="container">

    <h1>Listado de secciones</h1>

    <article class="panel panel-success">
        <div class="panel-heading">
            <h3>Listado de secciones</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Acción</th>
                </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_array($datos)) { ?>
                    <tr>
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['nombre']; ?> </td>
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
