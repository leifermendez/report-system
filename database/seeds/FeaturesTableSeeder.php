<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = [
            [
                'name' => 'Análisis',
                'description' => 'Análisis',
                'default_value' => 1
            ],
            [
                'name' => 'Reporte',
                'description' => 'Reporte'
            ],
            [
                'name' => 'Compilación',
                'description' => 'Compilación',
                'default_value' => 1
            ],
            [
                'name' => 'Despliegue STG',
                'description' => 'Despliegue STG',
                'default_value' => 1
            ],
            [
                'name' => 'Despliegue PROD',
                'description' => 'Despliegue PROD',
                'default_value' => 1
            ],
            [
                'name' => 'Pruebas',
                'description' => 'Pruebas',
                'default_value' => 1
            ],
            [
                'name' => 'Desarrollo de Modelo',
                'description' => 'Desarrollo de Modelo'
            ],
            [
                'name' => 'Desarrollo de Vista',
                'description' => 'Desarrollo de Vista'
            ],
            [
                'name' => 'Desarrollo de Controlador',
                'description' => 'Desarrollo de Controlador'
            ],
            [
                'name' => 'Desarrollo de Ruta',
                'description' => 'Desarrollo de Ruta'
            ],
            [
                'name' => 'Desarrollo de Servicio',
                'description' => 'Desarrollo de Servicio'
            ],

            [
                'name' => 'Reestructura de Modelo',
                'description' => 'Reestructura de Modelo'
            ],
            [
                'name' => 'Reestructura de Vista',
                'description' => 'Reestructura de Vista'
            ],
            [
                'name' => 'Reestructura de Controlador',
                'description' => 'Reestructura de Controlador'
            ],
            [
                'name' => 'Reestructura de Ruta',
                'description' => 'Reestructura de Ruta'
            ],
            [
                'name' => 'Reestructura de Servicio',
                'description' => 'Reestructura de Servicio'
            ],
        ];

        \App\Features::insert($features);
    }
}
