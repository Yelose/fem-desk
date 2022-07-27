<?php
require_once("Components/Layout.php");
require_once("Components/Header.php");
?>

<body>
    <div class="edit row justify-content-center">
        <main class="card">

            <h2 class="text-center">Editar Solicitud</h2>
            <a href="./index.php"><button type="button" id="button-cancel" class="btn btn-outline-danger button-cancel">Cancel</button></a>


            <form class="justify-content-center " action='?action=update&id=<?php echo $data["solicitud"]->getId() ?>' method="post">
                <div class="input-group">
                    <span class="input-group-text">Departamento:</span>
                    <input class="form-control" type="text" name="departamento" value='<?php echo $data["solicitud"]->getDepartamento() ?>'>
                </div>
                <div class="input-group">
                    <span class="input-group-text">Nombre:</span>
                    <input class="form-control" type="text" name="nombre" required value='<?php echo $data["solicitud"]->getNombre() ?>'>
                </div>
                <div class="input-group">
                    <span class="input-group-text">Consulta:</span>
                    <input class="form-control" type="text" name="consulta" required value='<?php echo $data["solicitud"]->getConsulta() ?>'>
                </div>
                <div class="input-group">
                    <span class="input-group-text">Descripción:</span>
                    <input class="form-control" area-label="With textarea" type="textarea" name="descripcion" required value='<?php echo $data["solicitud"]->getDescripcion() ?>'>
                </div>
                <div class="botones">
                    <input type="submit" value="Guardar">
                    <input type="reset" value="Reiniciar">
                </div>
            </form>
        </main>
    </div>
    <?php
    require_once("Components/Footer.php");
    ?>

</body>