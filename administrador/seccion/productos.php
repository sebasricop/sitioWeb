<?php include("../template/cabecera.php"); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-5">

            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
                </div>
                <form>

                    <div class="form-group">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre del libro">
                    </div>
                    <form>

                        <div class="form-group">
                            <label for="txtImagen">Imagen:</label>
                            <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Nombre del libro">
                        </div>

                        <div class="btn-group" role="group" aria-label="">
                            <button type="button" class="btn btn-success">Agregar</button>
                            <button type="button" class="btn btn-warning">Modificar</button>
                            <button type="button" class="btn btn-primary">Cancelar</button>
                        </div>
                    </form>

        </div>
        <div class="col-md-7">
            Tabla de libros (mostrar los datos de los libros)
        </div>
    </div>
</div>



<?php include("../template/pie.php"); ?>