<?php
require_once("Components/Layout.php");
require_once("Components/Header.php");
?>

<body>
    <div>
        <main>

            <h2>Editar Solicitud</h2>

            <form action='?action=update&id=<?php echo $data["solicitud"]->getId() ?>' method="post">
                <div class="input-group">
                    <label class="input-group-text">Departamento:</label>
                    <input class="form-control" type="text" name="departamento" value='<?php echo $data["solicitud"]->getDepartamento() ?>'>
                </div>
                <div class="input-group">
                    <label class="input-group-text">Nombre:</label>
                    <input class="form-control" type="text" name="nombre" required value='<?php echo $data["solicitud"]->getNombre() ?>'>
                </div>
                <div class="input-group">
                    <label class="input-group-text">Consulta:</label>
                    <input class="form-control" type="text" name="consulta" required value='<?php echo $data["solicitud"]->getConsulta() ?>'>
                </div>
                <div class="input-group">
                    <label class="input-group-text">Descripción:</label>
                    <input class="form-control" area-label="With textarea" type="textarea" name="descripcion" required value='<?php echo $data["solicitud"]->getDescripcion() ?>'>
                </div>
                <div class="botones">
                    <input type="submit" value="Guardar">
                    <input type="reset" value="Reestablecer">
                    <a href="./index.php"><button type="button" id="button-cancel">Cancelar</button></a>
                </div>
            </form>
        </main>
    </div>
    <?php
    require_once("Components/Footer.php");
    ?>

</body>