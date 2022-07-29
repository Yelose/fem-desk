<?php

namespace Tests\Unit;

use App\Models\Solicitudes;
use PHPUnit\Framework\TestCase;

class SolicitudesTest extends TestCase
{
    /** @test */
    public function test_function_getId_return_value_ID()
    {
        $solicitud = new Solicitudes(
            0, '20220728', 'presidencia', 'Juan', 'Portatil', 'bateria', [1,2,3]
        );

        $solicitudId = $solicitud->getId();

        $this->assertEquals('0', $solicitudId);
    }
    public function test_function_getFecha_return_value_fecha()
    {
        $solicitud = new Solicitudes(
            1, '2022-07-26 14:55:16', 'presidencia', 'Juan', 'Portatil', 'bateria', [1,2,3] 
        );

        $solicitudFecha = $solicitud->getFecha();

        $this->assertEquals('2022-07-26 14:55:16', $solicitudFecha);
    }
    
    public function test_function_getDepartamento_return_value_departamento()
    {
        $solicitud = new Solicitudes(
            1, '20220728', 'presidencia', 'Juan', 'Portatil', 'bateria', [1,2,3] 
        );

        $solicitudDepartamento = $solicitud->getDepartamento();

        $this->assertEquals('presidencia', $solicitudDepartamento);
    }

    public function test_function_getNombre_return_value_nombre()
    {
        $solicitud = new Solicitudes(
            1, '20220728', 'presidencia', 'Juan', 'Portatil', 'bateria', [1,2,3] 
        );

        $solicitudNombre = $solicitud->getNombre();

        $this->assertEquals('Juan', $solicitudNombre);
    }

    public function test_function_getConsulta_return_value_consulta()
    {
        $solicitud = new Solicitudes(
            1, '20220728', 'presidencia', 'Juan', 'Portatil', 'bateria', [1,2,3] 
        );

        $solicitudConsulta = $solicitud->getConsulta();

        $this->assertEquals('Portatil', $solicitudConsulta);
    }

    public function test_function_getDescripcion_return_value_descripcion()
    {
        $solicitud = new Solicitudes(
            1, '20220728', 'presidencia', 'Juan', 'Portatil', 'bateria', [1,2,3] 
        );
        
        $solicitudDescripcion = $solicitud->getDescripcion();

        $this->assertEquals('bateria', $solicitudDescripcion);
    }
}