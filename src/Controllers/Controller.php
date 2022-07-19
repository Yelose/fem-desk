<?php

namespace App\Controllers;

use App\Core\View;
use App\Database;
use App\Models\Solicitudes;
use App\Models\Logger;
use phpDocumentor\Reflection\Location;



class Controller
{

    private Logger $logger;

    public function __construct(Logger $logger)
    {

         $this->logger = $logger;

        if (isset($_GET["action"]) && ($_GET["action"] == "create")) {
            $this->create();
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "store")) {
            $this->store($_POST);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "edit")) {
            $this->edit($_GET["id"]);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "update")) {
            $this->update($_POST, $_GET["id"]);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "delete")) {

            $this->delete($_GET["id"]);
            return;
        }

        $this->index();
    }

    public function index(): void
    {

        $solicitud = new Solicitudes();
        $Solicitudes = $solicitud->all();
        
        new View("SolicitudesList", ["solicitud" => $Solicitudes]);
    }

    public function create(): void
    {
        /*echo 'Aqui tendremos el Formulario para crear';*/
        new View("Createsolicitud");
        
    }

    public function store(array $request): void
    {
        
        $newsolicitud = new Solicitudes(0,$request["solicitud"],$request["issue"]);

        $newsolicitud->save();

        $this-> logger->logCreate($newsolicitud);


        $this->index();
    }

    public function delete($id)
    {
        $solicitudHelper = new Solicitudes();
        $solicitud = $solicitudHelper->findById($id);
        $solicitud->delete();


        $this-> logger->logDelete($solicitud);

        $this->index();
    }

    public function edit($id)
    {
        $solicitudHelper = new Solicitudes();
        $solicitud = $solicitudHelper->findById($id);
        new View("EditSolicitud", ["solicitud" => $solicitud]);
    }

    public function update(array $request, $id)
    {
        $solicitudHelper = new Solicitudes();
        $solicitud = $solicitudHelper->findById($id);
        $solicitud->rename($request["solicitud"],$request["issue"]);
        $solicitud->update();
        
        $this-> logger->logUpdate($solicitud);

        // Return to View List
        $this->index();
    }
}
