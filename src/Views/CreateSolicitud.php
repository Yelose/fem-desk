<?php require_once("Components/Layout.php");


require_once("Components/Header.php"); ?>

<body>

            <h2>Nueva Solicitud</h2>
            <form action='?action=store' method="post">
                <header>
                    <h4>Rellena tu solicitud</h4>
                    <p>Rellena todos los campos y dale a enviar</p>
                </header>
                <section>
                    <div>
                        <label>Departamento</label>
                        <input type="text" name="departamento" required placeholder="departamento">
                    </div>
                    <div>
                        <label>Nombre</label>
                        <input type="text" name="nombre" required placeholder="nombre">
                    </div>
                    <div>
                        <label>Consulta</label>
                        <input type="text" name="consulta" required placeholder="consulta">
                    </div>
                </section>
                <div class="descripcion">
                    <label>descripcion</label>
                    <input type="text" name="descripcion" required placeholder="descripcion">
                </div>
                <div class="botones">
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Reestablecer">
                    <a href="./index.php"><button type="button" id="button-cancel">Cancelar</button></a>                    
                </div>
            </form>
    <?php
    require_once("Components/Footer.php");
    ?>
</body>