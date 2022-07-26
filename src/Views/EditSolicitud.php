<?php
require_once("Components/Layout.php");
require_once("Components/Header.php");
?>

<body>
    <div class="edit row justify-content-center">
        <main class="card" style="width: 80%; height:27rem; display:flex; justify-content:center; ">

            <h2 class="text-center" style="margin-bottom: 3rem; margin-top: 1rem;">Edit appointment</h2>
            <a href="./index.php"><button type="button" id="button-cancel" class="btn btn-outline-danger button-cancel">Cancel</button></a>


            <form class="justify-content-center " action='?action=update&id=<?php echo $data["solicitud"]->getId() ?>' method="post">
                <div class="input-group" style=" margin-bottom: 2rem; width: 90%; margin-left: 5%;">
                    <span class="input-group-text">Departamento:</span>
                    <input class="form-control" type="text" name="departamento" required value='<?php echo $data["departamento"]->getDepartamento() ?>'>
                </div>
                <div class="input-group" style=" margin-bottom: 2rem; width: 90%; margin-left: 5%;">
                    <span class="input-group-text">Nombre:</span>
                    <input class="form-control" type="text" name="nombre" required value='<?php echo $data["nombre"]->getNombre() ?>'>
                </div>
                <div class="input-group" style=" margin-bottom: 2rem; width: 90%; margin-left: 5%;">
                    <span class="input-group-text">Consulta:</span>
                    <input class="form-control" type="text" name="consulta" required value='<?php echo $data["consulta"]->getConsulta() ?>'>
                </div>
                <div class="input-group" style="width: 90%; margin-left: 5%;">
                    <span class="input-group-text">Descripción:</span>
                    <textarea class="form-control" area-label="With textarea" type="text" name="descripcion" required value='<?php echo $data["descripcion"]->getDescripcion() ?>'></textarea>
                </div>
                <div class="botones" style="margin-bottom: 2rem;">
                    <input class="btn-lg btn-outline-success go-add-task float" type="submit" value="Edit">
                    <input class="btn-lg btn-outline-warning go-add-task float" type="reset" value="Reset">
                </div>
            </form>
        </main>
    </div>
    <?php
    require_once("Components/Footer.php");
    ?>

</body>