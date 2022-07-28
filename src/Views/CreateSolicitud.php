<?php require_once("Components/Layout.php");


require_once("Components/Header.php"); ?>

<body>
    <div class="create row justify-content-center">
        <main class="card">

            <h2>New appointment</h2>
            <form action='?action=store' method="post">
                <div>
                    <label>Departamento</label>
                    <input type="text" name="departamento" required placeholder="departamento">
                </div>
                <div class="input-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" required placeholder="nombre">
                </div>
                <div class="input-group">
                    <label>Consulta</label>
                    <input type="text" name="consulta" required placeholder="consulta">
                </div>
                <div class="input-group">
                    <label>descripcion</label>
                    <input type="text" name="descripcion" required placeholder="descripcion">
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