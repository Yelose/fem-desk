<html>
<?php
require_once("Components/Layout.php");
?>
<script>
    let confirmacion = function(text, callback) {
        var confirmPopUp = document.createElement("div")
        confirmPopUp.className = "pop-up-mask"
        confirmPopUp.innerHTML = `
            <div class="pop-up-container"> 
                <p>${text}</p>
                
                <div class="btns-confirm">
                    <button class="btn-si" type="button">Sí</button>
                    <button class="btn-no" type="button">No</button>
                </div>
            </div>
        `
        document.body.appendChild(confirmPopUp)
        document.querySelector(".btn-no").addEventListener("click", () => {
            confirmPopUp.remove()
        })
        document.querySelector(".btn-si").addEventListener("click", () => {
            confirmPopUp.remove()
            callback()
        })
    }
</script>

<body id="page-top" class="body-index">
    <?php
    require_once("Components/Header.php");
    ?>
    <main>
        <div>
            <h1>Lista de solicitudes</h1>
        </div>
        <div class="solicitudes-container">

            <table id="dataTable">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th class="table-departamento">Departamento</th>
                        <th class="table-nombre">Nombre</th>
                        <th class="table-consulta">Consulta</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>


                <tbody>
                    <?php
                    foreach ($data["solicitud"] as $solicitud) {
                        echo "
                            <tr>
                                <td>{$solicitud->getFecha()}</td>
                                <td class='table-departamento'>{$solicitud->getDepartamento()}</td>
                                <td class='table-nombre'>{$solicitud->getNombre()}</td>
                                <td class='table-consulta'>{$solicitud->getConsulta()}</td>
                                <td>{$solicitud->getDescripcion()}</td>
                                <td class='edit-delete'>
                                    <a href='?action=edit&id={$solicitud->getId()}'><i class='fa-solid fa-pencil'></i></a>
                                    <a onclick='confirmacion(\"¿Desea eliminar el elemento de {$solicitud->getNombre()}, {$solicitud->getConsulta()}?\", function() {location.href = \"?action=delete&id={$solicitud->getId()}\"})' href='javascript:void(0)'><i class='fa-solid fa-trash-can'></i></a> 
                                </td>
                            </tr>
                        ";
                    } ?>

                </tbody>
            </table>
        </div>
    </main>
    <?php
    require_once("Components/Footer.php");
    ?>
</body>

</html>