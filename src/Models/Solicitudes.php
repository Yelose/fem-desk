<?php


namespace App\Models;


use App\Database;
use DateTime;
use PhpParser\Internal\PrintableNewAnonClassNode;

class Solicitudes
{
    private ?int $id;
    private string $solicitud;
    private string $issue;
    private $database;
    private $table = "solicitudes";
    private array $solicitudes;
    private array $solicitudItem;
    public function __construct(
        int $id = 0,
        string $fecha = '',
        string $departamento = '',
        string $nombre = '',
        string $consulta = '',
        string $descripcion = '',
        $solicitudes = [],
        $solicitudItem = [],

    ) {
        $this->id = $id;
        $this->fecha = $fecha;
        $this->departamento = $departamento;
        $this->nombre = $nombre;
        $this->consulta = $consulta;
        $this->descripcion = $descripcion;

        if (!$this->database) {
            $this->database = new Database();
        }
    }

    public function getId()
    {
        return $this->id;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function getDepartamento()
    {
        return $this->departamento;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getConsulta()
    {
        return $this->consulta;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function rename($solicitud, $issue)
    {
        $this->solicitud = $solicitud;
        $this->issue = $issue;
    }

    public function save(): void
    {
        /*$this->database->mysql->query("INSERT INTO `{$this->table}` (`id`, `solicitud`, `issue`, `date_time`) VALUES (NULL, `{$this->solicitud}`, `{$this->issue}`, '')");*/
        $this->database->mysql->query("INSERT INTO `{$this->table}` 
        (`departamento`, `nombre`, `consulta`, `descripcion`) 
        VALUES ('$this->departamento','$this->nombre',
        '$this->consulta','$this->descripcion')");
    }

    public function all()
    {
        $query = $this->database->mysql->query("select * FROM {$this->table}");
        $solicitudArray = $query->fetchAll();

        $solicitudes = [];

        foreach ($solicitudArray as $solicitud) {
            $solicitudItem = new Solicitudes(
                $solicitud["id"],
                $solicitud["fecha"],
                $solicitud["departamento"],
                $solicitud["nombre"],
                $solicitud["consulta"],
                $solicitud["descripcion"]
            );

            array_push($solicitudes, $solicitudItem);
        }

        return $solicitudes;
    }


    public function delete()
    {

        $query = $this->database->mysql->query("DELETE FROM `{$this->table}` WHERE `{$this->table}`.`id` = {$this->id}");
    }

    public function findById($id)
    {
        $query = $this->database->mysql->query("SELECT * FROM `{$this->table}` WHERE `id` = {$id}");
        $result = $query->fetchAll();

        return new Solicitudes(
            $result[0]["id"],
            $result[0]["fecha"],
            $result[0]["departamento"],
            $result[0]["nombre"],
            $result[0]["consulta"],
            $result[0]["descripcion"]
        );
    }


    public function Update()
    {
        $this->database->mysql->query("UPDATE `{$this->table}` SET `solicitud` =  '{$this->solicitud}', `issue` =  '{$this->issue}' WHERE `id` = {$this->id}");
    }
}
