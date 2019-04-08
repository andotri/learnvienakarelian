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

        $this->create('food_and_drink','medium','I eat curd','Minä syön rahkaa','Mie šyön rahkua',null);
        $this->create('food_and_drink','medium','You eat porridge','Sinä syöt puuroa','Šie šyöt huttuo',null);
        $this->create('food_and_drink','medium','I drink coffee','Minä juon kahvia','Mie juon kahvie',null);
        $this->create('food_and_drink','medium','You drink tea','Sinä juot teetä','Šie juot čäijyö',null);
        $this->create('food_and_drink','medium','He/she eat soup','Hän syö keittoa','Hiän šyöy keittuo',null);
        $this->create('food_and_drink','medium','We eat bread','Me syömme leipää','Myö šyömmä leipyä',null);
        $this->create('food_and_drink','medium','You eat rice','Te syötte riisiä','Työ šyöttä riissuo',null);
        $this->create('food_and_drink','medium','They eat fish','He syövät kalaa','Hyö šyyvväh kalua',null);
        $this->create('food_and_drink','medium','I drink milk','Minä juon maitoa','Mie juon maituo',null);
        $this->create('food_and_drink','medium','He/she drink juice','Hän juo mehua','Hiän juou mehuo',null);

        $this->create('clothing','medium','I\'m wearing shoes','Minulla on kengät jalassa','Miula on kenkät jalašša',null);
        $this->create('clothing','medium','You have white gloves','Sinulla on valkoiset sormikkaat','Šiula on valkiet šormikkahat',null);
        $this->create('clothing','medium','He/she has black throusers','Hänellä on mustat housut','Hänellä on muššat pukšut',null);
        $this->create('clothing','medium','We have colored mittens ','Meillä on kirjavat rukkaset','Meilä on kirjavat kintahat',null);
        $this->create('clothing','medium','You have warm clothes','Teillä on lämpimät vaatteet','Teilä on lämpimät vuattiet',null);
        $this->create('clothing','medium','They have beatiful dresses','Heillä on kauniit mekot','Heilä on kaunehet mekot',null);
        $this->create('clothing','medium','My favourite color is blue','Minun lempiväri on sininen','Miun lempiväri on šinini',null);
        $this->create('clothing','medium','What is your favourite cloth?','Mikä on sinun lempivaate?','Mi on šiun lempivuate? ',null);
        $this->create('clothing','medium','His/her trousers are old','Hänen housut ovat vanhat','Hänen pukšut ollah vanhat',null);
        $this->create('clothing','medium','Our clothes are small','Meidän vaatteet ovat pienet','Meijän vuottiet ollah pienet',null);
        $this->create('clothing','medium','Our shoes are dirty','Meidän kengät ovat likaiset','Teijän kenkät ollah likaset',null);
        $this->create('clothing','medium','Their clothes are long','Heidän vaatteet ovat pitkät','Heijän vuattiet ollah pität',null);

        $this->create('furniture','medium','The chair is crey','Tuoli on harmaa','Stuula on harmua',null);
        $this->create('furniture','medium','A dress is in a wardrobe','Mekko on vaatekaapissa','Mekko on vuateškuapissa',null);
        $this->create('furniture','medium','A sofa is in the living room','Sohva on olohuoneessa','Tivana on olohuonehešša',null);
        $this->create('furniture','medium','A table is green','Pöytä on vihreä','Stola on vihrie',null);
        $this->create('furniture','medium','A book is on the table','Kirja on pöydällä','Kirja on stolalla',null);
        $this->create('furniture','medium','A cup is in the cupboard','Kuppi on astiakaapissa','Kuppi on aštieškuapissa',null);
        $this->create('furniture','medium','A bed is in the bedroom','Sänky on makuuhuoneessa','Šänky on makuuhuonehešša',null);
        $this->create('furniture','medium','This is a wide table','Tämä on leveä pöytä','Tämä on levie stola',null);
        $this->create('furniture','medium','Kitchen is small','Keittiö on pieni','Keittijö on pieni',null);

        $this->create('weather','medium','Spring is coming','Kevät on tulossa','Kevät tulou',null);
        $this->create('weather','medium','Snow smelts in the spring','Keväällä lumi sulaa','Kevyällä lumi šulau',null);
        $this->create('weather','medium','Autumn is coming','Syksy saapuu','Šykyšy tulou',null);
        $this->create('weather','medium','It is snowing a lot in the winter','Talvella sataa paljon lunta','Talvella šatau äijän lunta',null);
        $this->create('weather','medium','It is warm in the summer','Kesällä on lämmin','Kešällä on lämmin',null);
        $this->create('weather','medium','It is very windy in the autumn','Syksyllä tuulee kovasti','Šykyšyllä tuulou lujah',null);
        $this->create('weather','medium','It is dark in the winter','Talvella on pimeä','Talvella on pimie',null);
        $this->create('weather','medium','It is raining a lot in the autumn','Syksyllä sataa paljon','Šykyšyllä šatau äijän',null);
        $this->create('weather','medium','It is hot weather in July','Heinäkuussa on kuuma sää','Heinäkuušša on kuuma šiä',null);
        $this->create('weather','medium','It was rainy and hard wind yesterday','Eilen oli sadetta ja kova tuuli','Eklein oli vihma ta luja tuuli',null);
        $this->create('weather','medium','It is not raining','Ei sada','Ei vihmu',null);
        $this->create('weather','medium','Sun is shining','Aurinko paistaa','Päiväni paistau',null);
        
        $this->create('body','medium','He/she is wearing black trousers','Hänellä on mustat housut jalassa','Hänellä on muššat pukšut jalašša',null);
        $this->create('body','medium','My ear hurts a lot','Minun korvaan sattuu kovasti','Miula korvua kivistäy lujah',null);
        $this->create('body','medium','Child has a small nose','Lapsella on pieni nenä','Lapšella on pieni no´kka',null);
        $this->create('body','medium','Mother has red lips','Äidillä on punaiset huulet','Muamolla on ruškiet huulet',null);
        $this->create('body','medium','Man has a crey beard','Miehellä on harmaa parta','Miehellä on harmua parta',null);
        $this->create('body','medium','Grandfather has crey mustache','Isoisällä on harmaat viikset','Ukolla on harmuat viikšet',null);
        $this->create('body','medium','You have beatiful blue eyes','Sinulla on kauniit siniset silmät','Šiula on kaunehet šiniset šilmät',null);
        $this->create('body','medium','Mittens are in hands','Rukkaset ovat kädessä','Kintahat ollah kiäššä',null);
        $this->create('body','medium','I have a sweater on','Minulla on villapaita päällä','Miula on villapaita piällä',null);
        $this->create('body','medium','You have scarf on head','Sinulla on huivi päässä','Šiula on paikka piäššä',null);
        $this->create('body','medium','What kind are your hair?','Minkälaiset hiukset sinulla on?','Mimmoni tukka šiula on?',null);
        $this->create('body','medium','What color eyes do you have?','Minkäväriset silmät sinulla on?','Min väriset šilmät šiula on?',null);

        $this->create('food_and_drink','hard','I do not eat curd','Minä en syö rahkaa','Mie en šyö rahkua',null);
        $this->create('food_and_drink','hard','You do not eat porridge','Sinä et syö puuroa','Šie et šyö huttuo',null);
        $this->create('food_and_drink','hard','He/she does not drink coffee','Hän ei juo kahvia','Hiän ei juo kahvie',null);
        $this->create('food_and_drink','hard','Do you drink milk or water?','Juotko sinä maitoa vai vettä?','Juotko šie maituo vain vettä?',null);
        $this->create('food_and_drink','hard','We do not eat soup','Me emme syö keittoa','Me emme syö keittoa',null);
        $this->create('food_and_drink','hard','We do not eat bread','Me emme syö leipää','Työ että šyö leipyä',null);
        $this->create('food_and_drink','hard','How much does salmon cost?','Paljonko lohi maksaa?','Äijänkö lohi makšau?',null);
        $this->create('food_and_drink','hard','They do not eat meat','He eivät syö lihaa','Hyö ei šyö lihua',null);
        $this->create('food_and_drink','hard','I do not eat apple','Minä en syö omenaa','Mie en syö omenua',null);
        $this->create('food_and_drink','hard','He/she eat potatos with salad','Hän syö perunaa salaatin kanssa','Hiän šyöy potakkua salatin kera',null);
        $this->create('food_and_drink','hard','I cook rice and fry fish','Minä keitän riisiä ja paistan kalaa','Mie keitän riissuo ta paissan kalua',null);
        $this->create('food_and_drink','hard','What food you buy today?','Mitä ruokaa sinä ostat tänä päivänä?','Mitä ruokua šie oššat tänäpiänä?',null);
        
        $this->create('clothing','hard','How much this scarf costs?','Kuinka paljon maksaa tämä huivi?','Kuin äijän makšau tämä paikka?',null);
        $this->create('clothing','hard','This mitten is brown','Tämä rukkanen on ruskea','Tämä kinnaš on pruuni',null);
        $this->create('clothing','hard','This sweater is light green','Tämä pusero on vaaleanvihreä','Tämä pušero on vualienvihrie',null);
        $this->create('clothing','hard','I tie scarf around the neck','Minä sidon huivin kaulaan','Mie šivon paikan kaklah',null);
        $this->create('clothing','hard','What you will wear?','Mitä sinä laitat päällesi?','Mitä šie panet piällä?',null);
        $this->create('clothing','hard','What you will buy from cloth store?','Mitä sinä ostat vaatekaupasta?','Mitä oššat on vuatekaupašta?',null);
        $this->create('clothing','hard','What winter clothes do you need?','Mitä talvivaatteita sinä tarvitset?','Mitä talvivuatteita šie tarvičet?',null);
        $this->create('clothing','hard','She will wear grey dress','Hän laittaa harmaan mekon päälle','Hiän panou harmuan mekon piällä',null);
        $this->create('clothing','hard','He/she washes that scarf ','Hän pesee tuon huivin','Hiän pešöy tuon paikan',null);
        $this->create('clothing','hard','We buy a new wardrobe','Me ostamme uuden vaatekaapin','Myö oššamma uuvven vuateškuapin',null);
        $this->create('clothing','hard','Your dress is more expensive than this','Siun mekko on kalliimpi kuin tämä','Šiun mekko on kallehempi kuin tämä',null);
        $this->create('clothing','hard','My trousers are much thicker than those','Minun housut ovat paljon paksummat kuin nuo','Miun pukšut ollah äijyä pakšummat mitä nuo',null);
        
        $this->create('furniture','hard','I buy a bed for the bedroom','Makuuhuoneeseen minä ostan sänkyn','Makuuhuoneheh mie oššan šänkyn',null);
        $this->create('furniture','hard','You buy a dining table and four chairs for the kitchen','Sinä ostat ruokapöydän ja neljä tuolia keittiöön','Šie oššat ruokastolan ta nellä stuulua keittijöh',null);
        $this->create('furniture','hard','Our writing table is broken','Meidän kirjoituspöytä on rikki','Meijän kirjutušstola on rikki',null);
        $this->create('furniture','hard','What is front of the window?','Mitä on ikkunan edessä?','Mitä on ikkunan ieššä?',null);
        $this->create('furniture','hard','A cat is behind the chair','Tuolin takana on kissa','Stuulan takuana on kišša',null);
        $this->create('furniture','hard','We have many beds','Meillä on monta sänkyä','Meilä on mota šänkyö',null);
        $this->create('furniture','hard','Where do you watch television?','Missä sinä katsot televisiota?','Missä šie kačot televiisorie?',null);
        $this->create('furniture','hard','In which room do you eat?','Missä huoneessa sinä syöt?','Missä huonehešša šie šyöt?',null);
        $this->create('furniture','hard','In which room is a bed?','Missä huoneessa on sänky?','Missä huonehešša ollah šänky?',null);
        $this->create('furniture','hard','A book is on the chair','Tuolilla on kirja','Stuulalla on kirja',null);
        $this->create('furniture','hard','We have a big coloured carpet','Meillä on iso kirjava matto','Meilä on šuuri kirjava matto?',null);
        $this->create('furniture','hard','A table is opposite the window','Ikkunan vastapäätä on pöytä','Ikkunan vaštapiätä on stola',null);

        $this->create('weather','hard','March is a start of Spring','Maaliskuu on kevään alku','Kevätkuu on kevyen alku',null);
        $this->create('weather','hard','It is needed to put headwear on in the winter ','Talvella pitää laittaa lakki päähän','Talvella pitäy panna lakki piäh',null);
        $this->create('weather','hard','Put mittens in your hands!','Laita rukkaset käteen!','Pane kintahat käteh!',null);
        $this->create('weather','hard','In this winter I knit woolen stockings','Tänä talvena minä kudon sukat','Tänä talvena mie tikutan šukat',null);
        $this->create('weather','hard','My grandmother knits a warm woolen sweater','Minun isoäiti kutoo lämpimän villapaidan','Miun ämmö tikuttau lämpimän villapaijan',null);
        $this->create('weather','hard','I do not wear winter clothes on','En laita talvivaatteita päälle','En pane talvivuatteita piälle',null);
        $this->create('weather','hard','Do not close the window','Älä laita ikkunaa kiinni ','Elä pane ikkunua kiini',null);
        $this->create('weather','hard','It is thunder and lightning','Salamat lyö ja ukkonen jyrisee','Tulta isköy ta ukkoni jyräjäy',null);
        $this->create('weather','hard','It is long winter in Karelia','Karjalassa on pitkä talvi','Karjalašša on pitkä talvi',null);
        $this->create('weather','hard','Day is short and night is long in the winter','Talvella päivä on lyhyt ja yö on pitkä','Talvella päivä on lyhyt ta yö on pitkä',null);
        $this->create('weather','hard','Summer is warm season','Kesä on lämmin vuodenaika','Kešä on lämmin vuuvvenaika',null);
        $this->create('weather','hard','It snows a lot and it is dark in the winter','Talvella sataa paljon lunta ja on pimeää','Talvella šatau äijän lunta ta on pimie',null);

        $this->create('body','hard','She is wearing an expensive dress','Hänellä on kallis mekko päällä','Hänellä on kallis mekko piällä',null);
        $this->create('body','hard','I am wearing yellow shirt','Minulla on keltainen paita päällä','Miula on keltani paita piällä',null);
        $this->create('body','hard','Child has a warm headwear','Lapsella on lämmin lakki päässä','Lapšella on lämmin lakki piässä',null);
        $this->create('body','hard','Mother has red lips','Äidillä on punaiset huulet','Muamolla on ruškiet huulet',null);
        $this->create('body','hard','Do you look like your father?','Oletko sinä isäsi näköinen?','Oletko šie tuaton näköni?',null);
        $this->create('body','hard','Who do you look like?','Kenen näköinen sinä olet?','Kenen näköni šie olet?',null);
        $this->create('body','hard','Mother has beautiful green eyes','Äidillä on kauniit vihreät silmät','Muamolla on kaunehet vihriet šilmät',null);
        $this->create('body','hard','Shoes are in the foot and gloves are in the hand','Kengät ovat jalassa ja sormikkaat ovat käsissä','Kenkät ollah jalašša ta šormikkahat ollah kiäššä',null);
        $this->create('body','hard','I put white shirt on','Laitoin valkoisen paidan päälle','Panin piällä valkien paijan',null);
        $this->create('body','hard','I will put black shoes on the leg','Jalkaan laitan mustat kengät','Jalkah panen muššat kenkät',null);
        $this->create('body','hard','What kind of shirt do you have on','Minkälainen paita sinulla on päällä','Mimmoni paita šiula on piällä?',null);
        $this->create('body','hard','Grandmother has a short crey hair','Isoäidillä on lyhyet harmaat hiukset','Ämmöllä on lyhyöt harmuat tukat?',null);
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
