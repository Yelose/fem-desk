<?php
namespace App\Models;

use App\Models\Solicitudes;

class Logger {
    
    private $dirOpenLog = "./src/logs/log.txt";

    public function logCreate ($newSolicitud){
        $logFile = fopen("{$this->dirOpenLog}", 'a') or die("Error creando archivo");
        fwrite($logFile, "\n".date("d/m/Y H:i:s")." se ha creado una solicitud con Nombre del Solicitud: 
        "."{$newSolicitud->getNombre()}"." con Descripcion: "."{$newSolicitud->getDescripcion()}") or 
            die("Error escribiendo en el archivo");fclose($logFile);
    }

    public function logUpdate ($newSolicitud){
        $logFile = fopen("{$this->dirOpenLog}", 'a') or die("Error creando archivo");
        fwrite($logFile, "\n".date("d/m/Y H:i:s")." se ha actualizado ID: "."{$newSolicitud->getId()}"." con Nombre del Solicitud: "."{$newSolicitud->getNombre()}"." con Descripcion: "."{$newSolicitud->getDescripcion()}") or 
            die("Error escribiendo en el archivo");fclose($logFile);
    }

    public function logDelete ($newSolicitud){
        $logFile = fopen("{$this->dirOpenLog}", 'a') or die("Error creando archivo");
        fwrite($logFile, "\n".date("d/m/Y H:i:s")." se ha eliminado ID: "."{$newSolicitud->getId()}"." con Nombre del Solicitud: "."{$newSolicitud->getNombre()}"." con Descripcion: "."{$newSolicitud->getDescripcion()}") or 
            die("Error escribiendo en el archivo");fclose($logFile);

    }

}

?>