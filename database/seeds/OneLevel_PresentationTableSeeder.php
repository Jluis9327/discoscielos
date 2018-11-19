<?php

use Illuminate\Database\Seeder;
use App\Onelevel_Presentation;
class OneLevel_PresentationTableSeeder extends Seeder
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
        Onelevel_Presentation::create([
            'gauging'=>60,
            'quantity'=>0,
            'Date'=>$fecha,
            'Id_Pre'=>1,
        ]);
        Onelevel_Presentation::create([
            'gauging'=>60,
            'quantity'=>0,
            'Date'=>$fecha,
            'Id_Pre'=>2,
        ]);
        Onelevel_Presentation::create([
            'gauging'=>60,
            'quantity'=>0,
            'Date'=>$fecha,
            'Id_Pre'=>3,
        ]);
    }
}
