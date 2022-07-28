<?php require_once("Components/Layout.php");


require_once("Components/Header.php"); ?>

<body>
    <div class="create row justify-content-center">
        <main class="card">

            <h2>Nueva Solicitud</h2>

            <form action='?action=store' method="post" class="shadow p-3 mb-5 bg-body rounded">
                <!--  <div class="">
                    <span>Departamento</span>
                    <input class="rounded" class="rounded" type="text" name="departamento" required placeholder="departamento">
                </div>
                <div>
                    <span>Nombre</span>
                    <input class="rounded" type="text" name="nombre" required placeholder="nombre">
                </div>
                <div class="input-group">
                    <span>Consulta</span>
                    <input class="rounded" type="text" name="consulta" required placeholder="consulta">
                </div>
                <div class="input-group">
                    <span>Descripcion</span>
                    <input class="rounded" type="text" name="descripcion" required placeholder="descripcion">
                </div>-->


                <div class="mb-3">
                    <label for="input-departament" class="form-label">Departamento</label>
                    <input type="text" class="form-control rounded-pill" name="departamento" id="input-departament" required placeholder="departamento">
                </div>
                <div class="mb-3">
                    <label for="input-name" class="form-label">Nombre</label>
                    <input type="text" class="form-control rounded-pill" name="departamento" id="input-name" required placeholder="nombre">
                </div>
                <div class="mb-3">
                    <label for="input-name" class="form-label">Consulta</label>
                    <input type="text" class="form-control rounded-pill" name="departamento" id="input-name" required placeholder="nombre">
                </div>
                <div class="form-group">
                    <label for="text-description">Descripción</label>
                    <textarea class="form-control" id="text-description" class="rounded" rows="3"></textarea>
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