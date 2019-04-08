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
        $this->create('food_and_drink','easy','Apple','Omena','Omena','images/easy/Apple.jpg');
        $this->create('food_and_drink','easy','Banana','Banaani','Banani','images/easy/Banana.jpg');
        $this->create('food_and_drink','easy','Milk','Maito','Maito','images/easy/Milk.jpg');
        $this->create('food_and_drink','easy','Coffee','Kahvi','Kahvi','images/easy/Coffee.jpg');
        $this->create('food_and_drink','easy','Tea','Tee','Čäijy','images/easy/Tea.jpg');
        $this->create('food_and_drink','easy','Ice cream','Jäätelö','Jiätelö','images/easy/Ice cream.jpg');
        $this->create('food_and_drink','easy','Pancake','Ohukainen','Kakkara','images/easy/Pancake.jpg');
        $this->create('food_and_drink','easy','Curd','Rahka','Rahka','images/easy/Curd.jpg');
        $this->create('food_and_drink','easy','Porridge','Puuro','Huttu','images/easy/Porridge.jpg');
        $this->create('food_and_drink','easy','Cheese','Juusto','Juušto','images/easy/Cheese.jpg');
        $this->create('food_and_drink','easy','Rice','Riisi','Riissu','images/easy/Rice.jpg');

        $this->create('clothing','easy','Sweater','Villapaita','Villapaita','images/easy/Sweater.jpg');
        $this->create('clothing','easy','Gloves','Sormikkaat','Šormikkahat','images/easy/Gloves.jpg');
        $this->create('clothing','easy','T-shirt','T-paita','Alušpaita','images/easy/T-shirt.jpg');
        $this->create('clothing','easy','Trousers','Housut','Pukšut','images/easy/Trousers.jpg');
        $this->create('clothing','easy','Mittens','Rukkaset','Kintahat','images/easy/Mittens.jpg');
        $this->create('clothing','easy','Scarf','Huivi','Paikka','images/easy/Scarf.jpg');
        $this->create('clothing','easy','Shoes','Kengät','Kenkät','images/easy/Shoes.jpg');
        $this->create('clothing','easy','Skirt','Hame','Hameh','images/easy/Skirt.jpg');
        $this->create('clothing','easy','Umbrella','Sateenvarjo','Sontikka','images/easy/Umbrella.jpg');
        $this->create('clothing','easy','Socks','Sukat','Šukat','images/easy/Socks.jpg');

        $this->create('furniture','easy','Chair','Tuoli','Stuula','images/easy/Chair.jpg');
        $this->create('furniture','easy','Wardrobe','Vaatekaappi','Vuateškuappi','images/easy/Wardrobe.jpg');
        $this->create('furniture','easy','Sofa','Sohva','Tivana','images/easy/Sofa.jpg');
        $this->create('furniture','easy','Table','Pöytä','Stola','images/easy/Table.jpg');

        $this->create('season','easy','Spring','Kevät','Kevät','images/easy/Spring.jpg');
        $this->create('season','easy','Summer','Kesä','Kešä','images/easy/Summer.jpg');
        $this->create('season','easy','Autumn','Syksy','Šykyšy','images/easy/Autumn.jpg');
        $this->create('season','easy','Winter','Talvi','Talvi','images/easy/Winter.jpg');

        $this->create('body','easy','Hand','Käsi','Käši','images/easy/Hand.jpg');
        $this->create('body','easy','Foot','Jalka','Jalka','images/easy/Foot.jpg');
        $this->create('body','easy','Hair','Hiukset','Tukat','images/easy/Hair.jpg');
        $this->create('body','easy','Eye','Silmä','Šilmä','images/easy/Eye.jpg');
        $this->create('body','easy','Mouth','Suu','Šuu','images/easy/Mouth.jpg');
        $this->create('body','easy','Neck','Kaula','Kakla','images/easy/Neck.jpg');
        $this->create('body','easy','Navel','Napa','N´apa','images/easy/Navel.jpg');
        $this->create('body','easy','Finger','Sormi','Šormi','images/easy/Finger.jpg');
        $this->create('body','easy','Head','Pää','Piä','images/easy/Head.jpg');
        $this->create('body','easy','Stomach','Vatsa','Vačča','images/easy/Stomach.jpg');
    }

    private function create($topic_name, $level, $english, $finnish, $viena_karelian, $picture) {
        \App\LearningObjective::create([
            'topic_name' => $topic_name,
            'level' => $level,
            'english' => $english,
            'finnish' => $finnish,
            'viena_karelian' => $viena_karelian,
            'picture' => $picture,
            ]);
    }
}
