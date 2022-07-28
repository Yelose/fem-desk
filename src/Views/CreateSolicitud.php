<?php require_once("Components/Layout.php");


require_once("Components/Header.php"); ?>

<body>
    <div class="create row justify-content-center">
        <main class="card">

            <h2>Nueva Solicitud</h2>

            <form action='?action=store' method="post" class="shadow p-3 mb-5 bg-body rounded">
                <div class="mb-3">
                    <label for="input-departament" class="form-label">Departamento</label>
                    <input type="text" class="form-control rounded-pill" name="departamento" id="input-departament" required placeholder="departamento">
                </div>
                <div class="mb-3">
                    <label for="input-name" class="form-label">Nombre</label>
                    <input type="text" class="form-control rounded-pill" name="nombre" id="input-name" required placeholder="nombre">
                </div>
                <div class="mb-3">
                    <label for="input-question" class="form-label">Consulta</label>
                    <input type="text" class="form-control rounded-pill" name="consulta" id="input-question" required placeholder="consulta">
                </div>
                <div class="form-group">
                    <label for="text-description">Descripción</label>
                    <input type="text" class="form-control rounded-pill" name="descripcion" id="text-description" class="rounded" >
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