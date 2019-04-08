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
        $this->create(11,1,'food_and_drink','easy',true,true,true);
        $this->create(11,2,'food_and_drink','medium',true,true,true);
        $this->create(11,3,'food_and_drink','hard',true,true,true);

        $this->create(11,4,'clothing','easy',true,true,true);
        $this->create(11,5,'clothing','medium',true,true,true);

        $this->create(11,7,'furniture','easy',true,true,true);

        $this->create(11,10,'season','easy',true,true,true);
        $this->create(11,11,'season','medium',true,true,true);
        $this->create(11,12,'season','hard',true,false,false);

        $this->create(11,13,'number','easy',true,true,true);
        $this->create(11,14,'number','medium',true,null,null);

        $this->create(11,16,'body','easy',true,false,null);
    }

    private function create($user_id, $learning_objective_id, $topic_name, $level, $reading, $listening, $writing) {
        $created_at = $this->rand_date('2019-04-01', '2019-04-09');

        \App\UserLearnedObjective::create([
            'user_id' => $user_id,
            'learning_objective_id' => $learning_objective_id,
            'topic_name' => $topic_name,
            'level' => $level,
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
