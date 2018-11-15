<?php

use Illuminate\Database\Seeder;
use App\Type;
class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->engine='InnoDB';
        //            $table->increments('Id_Ti');
        //            $table->string('Name');
        Type::create([
            'Name'=>'User'
        ]);

    }
}
