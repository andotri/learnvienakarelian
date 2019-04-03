<?php

use Illuminate\Database\Seeder;

class LearningObjectivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\LearningObjective::class, 100)->create();
    }
}
