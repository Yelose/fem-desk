<html>
<?php 
    require_once("Components/Layout.php"); 
?>

<body id="page-top" class="body-index">
    <?php 
        require_once("Components/Header.php");
    ?>
    <main class="form-prueba">
        <div>
            <h1>Lista de solicitudes</h1>
        </div>
        <div class="card-header py-3 mb-5">
            <a href="?action=create">
                <button type="button" class="btn btn-outline-dark go-add-task float-end btn-lg">Nueva Solicitud</button>
            </a>
        </div>
        <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Departamento</th>
                                            <th>Nombre</th>
                                            <th>Consulta</th>
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
                        <td>{$solicitud->getDepartamento()}</td>
                        <td>{$solicitud->getNombre()}</td>
                        <td>{$solicitud->getConsulta()}</td>
                        <td>{$solicitud->getDescripcion()}</td>
                        <td>               
                        <a href='?action=edit&id={$solicitud->getId()}'><i class='lnr lnr-pencil'></i></a>
                            <a href='?action=delete&id={$solicitud->getId()}'><i class='lnr lnr-trash'></i></a>
                        </td>
                    </tr>
                    ";
                } ?>

            </tbody>
        </table>
    </main>
    <?php 
    require_once("Components/Footer.php");
    ?>
</body>

</html>