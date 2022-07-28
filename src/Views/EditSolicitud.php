<?php
require_once("Components/Layout.php");
require_once("Components/Header.php");
?>

<body>
    <div class="create row justify-content-center">
        <main class="card">

            <h2>Editar Solicitud</h2>

            <form action='?action=update&id=<?php echo $data["solicitud"]->getId() ?>' method="post" class="shadow p-3 mb-5 bg-body rounded">
               <!--  <div class="input-group">
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
                    <input type="reset" value="Reestablecer">
                    <a href="./index.php"><button type="button" id="button-cancel">Cancelar</button></a>
                </div> -->

                <div class="mb-3">
                    <label for="input-departament" class="form-label">Departamento</label>
                    <input type="text" class="form-control rounded-pill" name="departamento" id="input-departament"   required value='<?php echo $data["solicitud"]->getDepartamento() ?>'>
                </div>
               
                <div class="mb-3">
                    <label for="input-name" class="form-label">Nombre</label>
                    <input type="text" class="form-control rounded-pill" name="nombre" id="input-name" required value='<?php echo $data["solicitud"]->getNombre() ?>'>
                </div>
                <div class="mb-3">
                    <label for="input-question" class="form-label">Consulta</label>
                    <input type="text" class="form-control rounded-pill" name="consulta" id="input-question" required value='<?php echo $data["solicitud"]->getConsulta() ?>'>
                </div>
                <div class="form-group">
                    <label for="text-description">Descripción</label>
                    <input type="text" class="form-control rounded-pill" name="descripcion" id="text-description"  required value='<?php echo $data["solicitud"]->getDescripcion() ?>'>
                </div>
                <div class="botones">
                    <input type="submit" value="Enviar solicitud">
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