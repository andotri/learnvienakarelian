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

    }

    private function create($user_id, $learning_objective_id, $listening, $reading, $writing, $created_at) {
        return [
            'user_id' => $user_id,
            'learning_objective_id' => $learning_objective_id,
            'listening' => $listening,
            'reading' => $reading,
            'writing' => $writing,
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];
    }
}
