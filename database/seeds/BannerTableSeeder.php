<?php

use Illuminate\Database\Seeder;
use App\Banner;
class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Banner::create([
            'Route'=>'a.jpg',
            'Type'=>'Principal',
            'Day'=>'Jueves',
            'Id_Pre'=>1
        ]);
        Banner::create([
            'Route'=>'a.jpg',
            'Type'=>'Secundario',
            'Day'=>'Jueves',
            'Id_Pre'=>1
        ]);
        Banner::create([
            'Route'=>'a.jpg',
            'Type'=>'Principal',
            'Day'=>'Viernes',
            'Id_Pre'=>2
        ]);
        Banner::create([
            'Route'=>'a.jpg',
            'Type'=>'Secundario',
            'Day'=>'Viernes',
            'Id_Pre'=>2
        ]);
        Banner::create([
            'Route'=>'a.jpg',
            'Type'=>'Principal',
            'Day'=>'Sabado',
            'Id_Pre'=>3
        ]);
        Banner::create([
            'Route'=>'a.jpg',
            'Type'=>'Secundario',
            'Day'=>'Sabado',
            'Id_Pre'=>3
        ]);
    }
}
