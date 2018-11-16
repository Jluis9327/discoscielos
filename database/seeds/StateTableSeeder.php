<?php

use Illuminate\Database\Seeder;
use App\State;
class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
           'Name'=>'Activo',
            'Id_Ti'=>1
        ]);
        State::create([
            'Name'=>'Inactivo',
            'Id_Ti'=>1
        ]);
        State::create([
            'Name'=>'Disponible',
            'Id_Ti'=>2
        ]);
        State::create([
            'Name'=>'Reservado',
            'Id_Ti'=>2
        ]);
        State::create([
            'Name'=>'Alquilado',
            'Id_Ti'=>2
        ]);
    }
}
