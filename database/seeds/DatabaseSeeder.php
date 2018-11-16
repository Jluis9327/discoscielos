<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PresentationTableSeeder::class);
        $this->call(BannerTableSeeder::class);
        $this->call(BoxTableSeeder::class);
        $this->call(Box_PresentationTableSeeder::class);
    }
}
