<?php

use Illuminate\Database\Seeder;

class CulturalInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CulturalInformation::class, 2)->create();
    }
}
