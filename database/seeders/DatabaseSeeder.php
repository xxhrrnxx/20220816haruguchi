<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{   
    private const SEEDERS = [
        UserSeeder::class,
    ];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // foreach(self::SEEDERS as $seeder) {
        //     $this->call($seeder);
        // }
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
    }
}
