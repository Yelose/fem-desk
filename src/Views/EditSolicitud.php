<?php
require_once("Components/Layout.php");
require_once("Components/Header.php");
?>

<body>
    <div class="create row justify-content-center">
        <main class="card">

            <h2>Editar Solicitud</h2>

            <form action='?action=update&id=<?php echo $data["solicitud"]->getId() ?>' method="post">
                <header>
                    <h4>Rellena tu solicitud</h4>
                    <p>Rellena todos los campos y dale a enviar</p>
                </header>
                <section>
                    <div>
                        <label>Departamento:</label>
                        <input type="text" name="departamento" value='<?php echo $data["solicitud"]->getDepartamento() ?>'>
                    </div>
                    <div>
                        <label>Nombre:</label>
                        <input type="text" name="nombre" required value='<?php echo $data["solicitud"]->getNombre() ?>'>
                    </div>
                    <div>
                        <label>Consulta:</label>
                        <input type="text" name="consulta" required value='<?php echo $data["solicitud"]->getConsulta() ?>'>
                    </div>
                </section>
                <div class="descripcion">
                    <label>Descripción:</label>
                    <input type="text" name="descripcion" required value='<?php echo $data["solicitud"]->getDescripcion() ?>'>
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