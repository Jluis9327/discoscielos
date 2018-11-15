<?php

use Illuminate\Database\Seeder;
use App\Presentation;
class PresentationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('America/Lima');
        $fecha = date('Y/m/d');
        Presentation::create([
            'Name'=>'Jueves',
            'Date'=>'2018/11/22'
        ]);
        Presentation::create([
            'Name'=>'Viernes',
            'Date'=>'2018/11/23'
        ]);
        Presentation::create([
            'Name'=>'Sabado',
            'Date'=>'2018/11/24'
        ]);
    }
}
