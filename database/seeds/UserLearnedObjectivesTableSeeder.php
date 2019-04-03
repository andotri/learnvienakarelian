<?php

use Illuminate\Database\Seeder;

class UserLearnedObjectivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserLearnedObjective::class, 3000)->create();
    }
}
