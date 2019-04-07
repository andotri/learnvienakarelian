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
        $this->create('food_and_drink', 'easy','en','fi','vk','food_and_drink/apples.jpg', null);
        $this->create('food_and_drink', 'medium','en en','fi fi','vk vk',null, 1);
        $this->create('food_and_drink', 'hard','en en en','fi fi fi','vk vk vk',null, 2);

        $this->create('clothing', 'easy','en','fi','vk','food_and_drink/apples.jpg', null);
        $this->create('clothing', 'medium','en en','fi fi','vk vk',null, 1);
        $this->create('clothing', 'hard','en en en','fi fi fi','vk vk vk',null, 2);

        $this->create('furniture', 'easy','en','fi','vk','food_and_drink/apples.jpg', null);
        $this->create('furniture', 'medium','en en','fi fi','vk vk',null, 1);
        $this->create('furniture', 'hard','en en en','fi fi fi','vk vk vk',null, 2);

        $this->create('season', 'easy','en','fi','vk','food_and_drink/apples.jpg', null);
        $this->create('season', 'medium','en en','fi fi','vk vk',null, 1);
        $this->create('season', 'hard','en en en','fi fi fi','vk vk vk',null, 2);

        $this->create('number', 'easy','en','fi','vk','food_and_drink/apples.jpg', null);
        $this->create('number', 'medium','en en','fi fi','vk vk',null, 1);
        $this->create('number', 'hard','en en en','fi fi fi','vk vk vk',null, 2);

        $this->create('body', 'easy','en','fi','vk','food_and_drink/apples.jpg', null);
        $this->create('body', 'medium','en en','fi fi','vk vk',null, 1);
        $this->create('body', 'hard','en en en','fi fi fi','vk vk vk',null, 2);

        $this->create('days_and_months', 'easy','en','fi','vk','food_and_drink/apples.jpg', null);
        $this->create('days_and_months', 'medium','en en','fi fi','vk vk',null, 1);
        $this->create('days_and_months', 'hard','en en en','fi fi fi','vk vk vk',null, 2);
    }

    private function create($topic_name, $level, $english, $finnish, $viena_karelian, $picture, $word_index) {
        \App\LearningObjective::create([
            'topic_name' => $topic_name,
            'level' => $level,
            'english' => $english,
            'finnish' => $finnish,
            'viena_karelian' => $viena_karelian,
            'picture' => $picture,
            'word_index' => $word_index,
            ]);
    }
}
