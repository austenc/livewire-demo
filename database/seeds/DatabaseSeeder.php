<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            factory(App\Subscriber::class)->create([
                'confirmed_at' => rand(0, 1) ? now() : null
            ]);
        }
    }
}
