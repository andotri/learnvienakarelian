<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserLearnedObjectivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->create(11,1,true,true,true);
        $this->create(11,2,true,true,true);
        $this->create(11,3,true,true,true);

        $this->create(11,4,true,true,true);
        $this->create(11,5,true,true,true);

        $this->create(11,7,true,true,true);

        $this->create(11,10,true,true,true);
        $this->create(11,11,true,true,true);
        $this->create(11,12,true,false,false);

        $this->create(11,13,true,true,true);
        $this->create(11,14,true,null,null);

        $this->create(11,16,true,false,null);
    }

    private function create($user_id, $learning_objective_id, $reading, $listening, $writing) {
        $created_at = $this->rand_date('2019-03-06', '2019-04-06');

        \App\UserLearnedObjective::create([
            'user_id' => $user_id,
            'learning_objective_id' => $learning_objective_id,
            'reading' => $reading,
            'listening' => $listening,
            'writing' => $writing,
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ]);
    }

    private function rand_date($min_date, $max_date) {
        /* Gets 2 dates as string, earlier and later date.
           Returns date in between them.
        */

        $min_epoch = strtotime($min_date);
        $max_epoch = strtotime($max_date);

        $rand_epoch = rand($min_epoch, $max_epoch);

        return date('Y-m-d H:i:s', $rand_epoch);
    }
}
