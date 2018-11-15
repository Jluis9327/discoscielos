<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'DNI'=>47956194,
            'name'=>'Wilmer',
            'surname'=>'Teran Asmat',
            'phone'=>964512023,
            'email'=>'wilmer@gmail.com',
            'password'=>bcrypt('2835145'),
            'Id_Rol'=>1,
            'Id_Est'=>1
        ]);
        User::create([
            'DNI'=>47956195,
            'name'=>'Katerine',
            'surname'=>'Silva Gonzales',
            'phone'=>964512024,
            'email'=>'katerine@gmail.com',
            'password'=>bcrypt('2835145'),
            'Id_Rol'=>2,
            'Id_Est'=>1
        ]);
    }
}
