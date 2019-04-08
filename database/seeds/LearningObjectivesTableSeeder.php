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
        $this->create('food_and_drink','easy','Apple','Omena','Omena','images/easy/Apple.jpg','voices/easy/1.mp3');
        $this->create('food_and_drink','easy','Banana','Banaani','Banani','images/easy/Banana.jpg','voices/easy/2.mp3');
        $this->create('food_and_drink','easy','Milk','Maito','Maito','images/easy/Milk.jpg','voices/easy/3.mp3');
        $this->create('food_and_drink','easy','Coffee','Kahvi','Kahvi','images/easy/Coffee.jpg','voices/easy/4.mp3');
        $this->create('food_and_drink','easy','Tea','Tee','Čäijy','images/easy/Tea.jpg','voices/easy/5.mp3');
        $this->create('food_and_drink','easy','Ice cream','Jäätelö','Jiätelö','images/easy/Ice cream.jpg','voices/easy/6.mp3');
        $this->create('food_and_drink','easy','Pancake','Ohukainen','Kakkara','images/easy/Pancake.jpg','voices/easy/7.mp3');
        $this->create('food_and_drink','easy','Curd','Rahka','Rahka','images/easy/Curd.jpg','voices/easy/8.mp3');
        $this->create('food_and_drink','easy','Porridge','Puuro','Huttu','images/easy/Porridge.jpg','voices/easy/9.mp3');
        $this->create('food_and_drink','easy','Cheese','Juusto','Juušto','images/easy/Cheese.jpg','voices/easy/10.mp3');
        $this->create('food_and_drink','easy','Rice','Riisi','Riissu','images/easy/Rice.jpg','voices/easy/11.mp3');

        $this->create('clothing','easy','Sweater','Villapaita','Villapaita','images/easy/Sweater.jpg','voices/easy/12.mp3');
        $this->create('clothing','easy','Gloves','Sormikkaat','Šormikkahat','images/easy/Gloves.jpg','voices/easy/13.mp3');
        $this->create('clothing','easy','T-shirt','T-paita','Alušpaita','images/easy/T-shirt.jpg','voices/easy/14.mp3');
        $this->create('clothing','easy','Trousers','Housut','Pukšut','images/easy/Trousers.jpg','voices/easy/15.mp3');
        $this->create('clothing','easy','Mittens','Rukkaset','Kintahat','images/easy/Mittens.jpg','voices/easy/16.mp3');
        $this->create('clothing','easy','Scarf','Huivi','Paikka','images/easy/Scarf.jpg','voices/easy/17.mp3');
        $this->create('clothing','easy','Shoes','Kengät','Kenkät','images/easy/Shoes.jpg','voices/easy/18.mp3');
        $this->create('clothing','easy','Skirt','Hame','Hameh','images/easy/Skirt.jpg','voices/easy/19.mp3');
        $this->create('clothing','easy','Umbrella','Sateenvarjo','Sontikka','images/easy/Umbrella.jpg','voices/easy/20.mp3');
        $this->create('clothing','easy','Socks','Sukat','Šukat','images/easy/Socks.jpg','voices/easy/21.mp3');

        $this->create('furniture','easy','Chair','Tuoli','Stuula','images/easy/Chair.jpg','voices/easy/22.mp3');
        $this->create('furniture','easy','Wardrobe','Vaatekaappi','Vuateškuappi','images/easy/Wardrobe.jpg','voices/easy/23.mp3');
        $this->create('furniture','easy','Sofa','Sohva','Tivana','images/easy/Sofa.jpg','voices/easy/24.mp3');
        $this->create('furniture','easy','Table','Pöytä','Stola','images/easy/Table.jpg','voices/easy/25.mp3');

        $this->create('season','easy','Spring','Kevät','Kevät','images/easy/Spring.jpg','voices/easy/26.mp3');
        $this->create('season','easy','Summer','Kesä','Kešä','images/easy/Summer.jpg','voices/easy/27.mp3');
        $this->create('season','easy','Autumn','Syksy','Šykyšy','images/easy/Autumn.jpg','voices/easy/28.mp3');
        $this->create('season','easy','Winter','Talvi','Talvi','images/easy/Winter.jpg','voices/easy/29.mp3');

        $this->create('body','easy','Hand','Käsi','Käši','images/easy/Hand.jpg','voices/easy/30.mp3');
        $this->create('body','easy','Foot','Jalka','Jalka','images/easy/Foot.jpg','voices/easy/31.mp3');
        $this->create('body','easy','Hair','Hiukset','Tukat','images/easy/Hair.jpg','voices/easy/32.mp3');
        $this->create('body','easy','Eye','Silmä','Šilmä','images/easy/Eye.jpg','voices/easy/33.mp3');
        $this->create('body','easy','Mouth','Suu','Šuu','images/easy/Mouth.jpg','voices/easy/34.mp3');
        $this->create('body','easy','Neck','Kaula','Kakla','images/easy/Neck.jpg','voices/easy/35.mp3');
        $this->create('body','easy','Navel','Napa','N´apa','images/easy/Navel.jpg','voices/easy/36.mp3');
        $this->create('body','easy','Finger','Sormi','Šormi','images/easy/Finger.jpg','voices/easy/37.mp3');
        $this->create('body','easy','Head','Pää','Piä','images/easy/Head.jpg','voices/easy/38.mp3');
        $this->create('body','easy','Stomach','Vatsa','Vačča','images/easy/Stomach.jpg','voices/easy/39.mp3');

        $this->create('food_and_drink','medium','I eat curd','Minä syön rahkaa','Mie šyön rahkua',null,'voices/medium/1.mp3');
        $this->create('food_and_drink','medium','You eat porridge','Sinä syöt puuroa','Šie šyöt huttuo',null,'voices/medium/2.mp3');
        $this->create('food_and_drink','medium','I drink coffee','Minä juon kahvia','Mie juon kahvie',null,'voices/medium/3.mp3');
        $this->create('food_and_drink','medium','You drink tea','Sinä juot teetä','Šie juot čäijyö',null,'voices/medium/4.mp3');
        $this->create('food_and_drink','medium','He/she eat soup','Hän syö keittoa','Hiän šyöy keittuo',null,'voices/medium/5.mp3');
        $this->create('food_and_drink','medium','We eat bread','Me syömme leipää','Myö šyömmä leipyä',null,'voices/medium/6.mp3');
        $this->create('food_and_drink','medium','You eat rice','Te syötte riisiä','Työ šyöttä riissuo',null,'voices/medium/7.mp3');
        $this->create('food_and_drink','medium','They eat fish','He syövät kalaa','Hyö šyyvväh kalua',null,'voices/medium/8.mp3');
        $this->create('food_and_drink','medium','I drink milk','Minä juon maitoa','Mie juon maituo',null,'voices/medium/9.mp3');
        $this->create('food_and_drink','medium','He/she drink juice','Hän juo mehua','Hiän juou mehuo',null,'voices/medium/10.mp3');

        $this->create('clothing','medium','I\'m wearing shoes','Minulla on kengät jalassa','Miula on kenkät jalašša',null,'voices/medium/11.mp3');
        $this->create('clothing','medium','You have white gloves','Sinulla on valkoiset sormikkaat','Šiula on valkiet šormikkahat',null,'voices/medium/12.mp3');
        $this->create('clothing','medium','He/she has black throusers','Hänellä on mustat housut','Hänellä on muššat pukšut',null,'voices/medium/13.mp3');
        $this->create('clothing','medium','We have colored mittens ','Meillä on kirjavat rukkaset','Meilä on kirjavat kintahat',null,'voices/medium/14.mp3');
        $this->create('clothing','medium','You have warm clothes','Teillä on lämpimät vaatteet','Teilä on lämpimät vuattiet',null,'voices/medium/15.mp3');
        $this->create('clothing','medium','They have beatiful dresses','Heillä on kauniit mekot','Heilä on kaunehet mekot',null,'voices/medium/16.mp3');
        $this->create('clothing','medium','My favourite color is blue','Minun lempiväri on sininen','Miun lempiväri on šinini',null,'voices/medium/17.mp3');
        $this->create('clothing','medium','What is your favourite cloth?','Mikä on sinun lempivaate?','Mi on šiun lempivuate? ',null,'voices/medium/18.mp3');
        $this->create('clothing','medium','His/her trousers are old','Hänen housut ovat vanhat','Hänen pukšut ollah vanhat',null,'voices/medium/19.mp3');
        $this->create('clothing','medium','Our clothes are small','Meidän vaatteet ovat pienet','Meijän vuottiet ollah pienet',null,'voices/medium/20.mp3');
        $this->create('clothing','medium','Our shoes are dirty','Meidän kengät ovat likaiset','Teijän kenkät ollah likaset',null,'voices/medium/21.mp3');
        $this->create('clothing','medium','Their clothes are long','Heidän vaatteet ovat pitkät','Heijän vuattiet ollah pität',null,'voices/medium/22.mp3');

        $this->create('furniture','medium','The chair is crey','Tuoli on harmaa','Stuula on harmua',null,'voices/medium/23.mp3');
        $this->create('furniture','medium','A dress is in a wardrobe','Mekko on vaatekaapissa','Mekko on vuateškuapissa',null,'voices/medium/24.mp3');
        $this->create('furniture','medium','A sofa is in the living room','Sohva on olohuoneessa','Tivana on olohuonehešša',null,'voices/medium/25.mp3');
        $this->create('furniture','medium','A table is green','Pöytä on vihreä','Stola on vihrie',null,'voices/medium/26.mp3');
        $this->create('furniture','medium','A book is on the table','Kirja on pöydällä','Kirja on stolalla',null,'voices/medium/27.mp3');
        $this->create('furniture','medium','A cup is in the cupboard','Kuppi on astiakaapissa','Kuppi on aštieškuapissa',null,'voices/medium/28.mp3');
        $this->create('furniture','medium','A bed is in the bedroom','Sänky on makuuhuoneessa','Šänky on makuuhuonehešša',null,'voices/medium/29.mp3');
        $this->create('furniture','medium','This is a wide table','Tämä on leveä pöytä','Tämä on levie stola',null,'voices/medium/30.mp3');
        $this->create('furniture','medium','Kitchen is small','Keittiö on pieni','Keittijö on pieni',null,'voices/medium/31.mp3');

        $this->create('weather','medium','Spring is coming','Kevät on tulossa','Kevät tulou',null,'voices/medium/32.mp3');
        $this->create('weather','medium','Snow smelts in the spring','Keväällä lumi sulaa','Kevyällä lumi šulau',null,'voices/medium/33.mp3');
        $this->create('weather','medium','Autumn is coming','Syksy saapuu','Šykyšy tulou',null,'voices/medium/34.mp3');
        $this->create('weather','medium','It is snowing a lot in the winter','Talvella sataa paljon lunta','Talvella šatau äijän lunta',null,'voices/medium/35.mp3');
        $this->create('weather','medium','It is warm in the summer','Kesällä on lämmin','Kešällä on lämmin',null,'voices/medium/36.mp3');
        $this->create('weather','medium','It is very windy in the autumn','Syksyllä tuulee kovasti','Šykyšyllä tuulou lujah',null,'voices/medium/37.mp3');
        $this->create('weather','medium','It is dark in the winter','Talvella on pimeä','Talvella on pimie',null,'voices/medium/38.mp3');
        $this->create('weather','medium','It is raining a lot in the autumn','Syksyllä sataa paljon','Šykyšyllä šatau äijän',null,'voices/medium/39.mp3');
        $this->create('weather','medium','It is hot weather in July','Heinäkuussa on kuuma sää','Heinäkuušša on kuuma šiä',null,'voices/medium/40.mp3');
        $this->create('weather','medium','It was rainy and hard wind yesterday','Eilen oli sadetta ja kova tuuli','Eklein oli vihma ta luja tuuli',null,'voices/medium/41.mp3');
        $this->create('weather','medium','It is not raining','Ei sada','Ei vihmu',null,'voices/medium/42.mp3');
        $this->create('weather','medium','Sun is shining','Aurinko paistaa','Päiväni paistau',null,'voices/medium/43.mp3');

        $this->create('body','medium','He/she is wearing black trousers','Hänellä on mustat housut jalassa','Hänellä on muššat pukšut jalašša',null,'voices/medium/44.mp3');
        $this->create('body','medium','My ear hurts a lot','Minun korvaan sattuu kovasti','Miula korvua kivistäy lujah',null,'voices/medium/45.mp3');
        $this->create('body','medium','Child has a small nose','Lapsella on pieni nenä','Lapšella on pieni no´kka',null,'voices/medium/46.mp3');
        $this->create('body','medium','Mother has red lips','Äidillä on punaiset huulet','Muamolla on ruškiet huulet',null,'voices/medium/47.mp3');
        $this->create('body','medium','Man has a crey beard','Miehellä on harmaa parta','Miehellä on harmua parta',null,'voices/medium/48.mp3');
        $this->create('body','medium','Grandfather has crey mustache','Isoisällä on harmaat viikset','Ukolla on harmuat viikšet',null,'voices/medium/49.mp3');
        $this->create('body','medium','You have beatiful blue eyes','Sinulla on kauniit siniset silmät','Šiula on kaunehet šiniset šilmät',null,'voices/medium/50.mp3');
        $this->create('body','medium','Mittens are in hands','Rukkaset ovat kädessä','Kintahat ollah kiäššä',null,'voices/medium/51.mp3');
        $this->create('body','medium','I have a sweater on','Minulla on villapaita päällä','Miula on villapaita piällä',null,'voices/medium/52.mp3');
        $this->create('body','medium','You have scarf on head','Sinulla on huivi päässä','Šiula on paikka piäššä',null,'voices/medium/53.mp3');
        $this->create('body','medium','What kind are your hair?','Minkälaiset hiukset sinulla on?','Mimmoni tukka šiula on?',null,'voices/medium/54.mp3');
        $this->create('body','medium','What color eyes do you have?','Minkäväriset silmät sinulla on?','Min väriset šilmät šiula on?',null,'voices/medium/55.mp3');

        $this->create('food_and_drink','hard','I do not eat curd','Minä en syö rahkaa','Mie en šyö rahkua',null,'voices/hard/1.mp3');
        $this->create('food_and_drink','hard','You do not eat porridge','Sinä et syö puuroa','Šie et šyö huttuo',null,'voices/hard/2.mp3');
        $this->create('food_and_drink','hard','He/she does not drink coffee','Hän ei juo kahvia','Hiän ei juo kahvie',null,'voices/hard/3.mp3');
        $this->create('food_and_drink','hard','Do you drink milk or water?','Juotko sinä maitoa vai vettä?','Juotko šie maituo vain vettä?',null,'voices/hard/4.mp3');
        $this->create('food_and_drink','hard','We do not eat soup','Me emme syö keittoa','Me emme syö keittoa',null,'voices/hard/5.mp3');
        $this->create('food_and_drink','hard','We do not eat bread','Me emme syö leipää','Työ että šyö leipyä',null,'voices/hard/6.mp3');
        $this->create('food_and_drink','hard','How much does salmon cost?','Paljonko lohi maksaa?','Äijänkö lohi makšau?',null,'voices/hard/7.mp3');
        $this->create('food_and_drink','hard','They do not eat meat','He eivät syö lihaa','Hyö ei šyö lihua',null,'voices/hard/8.mp3');
        $this->create('food_and_drink','hard','I do not eat apple','Minä en syö omenaa','Mie en syö omenua',null,'voices/hard/9.mp3');
        $this->create('food_and_drink','hard','He/she eat potatos with salad','Hän syö perunaa salaatin kanssa','Hiän šyöy potakkua salatin kera',null,'voices/hard/10.mp3');
        $this->create('food_and_drink','hard','I cook rice and fry fish','Minä keitän riisiä ja paistan kalaa','Mie keitän riissuo ta paissan kalua',null,'voices/hard/11.mp3');
        $this->create('food_and_drink','hard','What food you buy today?','Mitä ruokaa sinä ostat tänä päivänä?','Mitä ruokua šie oššat tänäpiänä?',null,'voices/hard/12.mp3');

        $this->create('clothing','hard','How much this scarf costs?','Kuinka paljon maksaa tämä huivi?','Kuin äijän makšau tämä paikka?',null,'voices/hard/13.mp3');
        $this->create('clothing','hard','This mitten is brown','Tämä rukkanen on ruskea','Tämä kinnaš on pruuni',null,'voices/hard/14.mp3');
        $this->create('clothing','hard','This sweater is light green','Tämä pusero on vaaleanvihreä','Tämä pušero on vualienvihrie',null,'voices/hard/15.mp3');
        $this->create('clothing','hard','I tie scarf around the neck','Minä sidon huivin kaulaan','Mie šivon paikan kaklah',null,'voices/hard/16.mp3');
        $this->create('clothing','hard','What you will wear?','Mitä sinä laitat päällesi?','Mitä šie panet piällä?',null,'voices/hard/17.mp3');
        $this->create('clothing','hard','What you will buy from cloth store?','Mitä sinä ostat vaatekaupasta?','Mitä oššat on vuatekaupašta?',null,'voices/hard/18.mp3');
        $this->create('clothing','hard','What winter clothes do you need?','Mitä talvivaatteita sinä tarvitset?','Mitä talvivuatteita šie tarvičet?',null,'voices/hard/19.mp3');
        $this->create('clothing','hard','She will wear grey dress','Hän laittaa harmaan mekon päälle','Hiän panou harmuan mekon piällä',null,'voices/hard/20.mp3');
        $this->create('clothing','hard','He/she washes that scarf ','Hän pesee tuon huivin','Hiän pešöy tuon paikan',null,'voices/hard/21.mp3');
        $this->create('clothing','hard','We buy a new wardrobe','Me ostamme uuden vaatekaapin','Myö oššamma uuvven vuateškuapin',null,'voices/hard/22.mp3');
        $this->create('clothing','hard','Your dress is more expensive than this','Siun mekko on kalliimpi kuin tämä','Šiun mekko on kallehempi kuin tämä',null,'voices/hard/23.mp3');
        $this->create('clothing','hard','My trousers are much thicker than those','Minun housut ovat paljon paksummat kuin nuo','Miun pukšut ollah äijyä pakšummat mitä nuo',null,'voices/hard/24.mp3');

        $this->create('furniture','hard','I buy a bed for the bedroom','Makuuhuoneeseen minä ostan sänkyn','Makuuhuoneheh mie oššan šänkyn',null,'voices/hard/25.mp3');
        $this->create('furniture','hard','You buy a dining table and four chairs for the kitchen','Sinä ostat ruokapöydän ja neljä tuolia keittiöön','Šie oššat ruokastolan ta nellä stuulua keittijöh',null,'voices/hard/26.mp3');
        $this->create('furniture','hard','Our writing table is broken','Meidän kirjoituspöytä on rikki','Meijän kirjutušstola on rikki',null,'voices/hard/27.mp3');
        $this->create('furniture','hard','What is front of the window?','Mitä on ikkunan edessä?','Mitä on ikkunan ieššä?',null,'voices/hard/28.mp3');
        $this->create('furniture','hard','A cat is behind the chair','Tuolin takana on kissa','Stuulan takuana on kišša',null,'voices/hard/29.mp3');
        $this->create('furniture','hard','We have many beds','Meillä on monta sänkyä','Meilä on mota šänkyö',null,'voices/hard/30.mp3');
        $this->create('furniture','hard','Where do you watch television?','Missä sinä katsot televisiota?','Missä šie kačot televiisorie?',null,'voices/hard/31.mp3');
        $this->create('furniture','hard','In which room do you eat?','Missä huoneessa sinä syöt?','Missä huonehešša šie šyöt?',null,'voices/hard/32.mp3');
        $this->create('furniture','hard','In which room is a bed?','Missä huoneessa on sänky?','Missä huonehešša ollah šänky?',null,'voices/hard/33.mp3');
        $this->create('furniture','hard','A book is on the chair','Tuolilla on kirja','Stuulalla on kirja',null,'voices/hard/34.mp3');
        $this->create('furniture','hard','We have a big coloured carpet','Meillä on iso kirjava matto','Meilä on šuuri kirjava matto?',null,'voices/hard/35.mp3');
        $this->create('furniture','hard','A table is opposite the window','Ikkunan vastapäätä on pöytä','Ikkunan vaštapiätä on stola',null,'voices/hard/36.mp3');

        $this->create('weather','hard','March is a start of Spring','Maaliskuu on kevään alku','Kevätkuu on kevyen alku',null,'voices/hard/37.mp3');
        $this->create('weather','hard','It is needed to put headwear on in the winter ','Talvella pitää laittaa lakki päähän','Talvella pitäy panna lakki piäh',null,'voices/hard/38.mp3');
        $this->create('weather','hard','Put mittens in your hands!','Laita rukkaset käteen!','Pane kintahat käteh!',null,'voices/hard/39.mp3');
        $this->create('weather','hard','In this winter I knit woolen stockings','Tänä talvena minä kudon sukat','Tänä talvena mie tikutan šukat',null,'voices/hard/40.mp3');
        $this->create('weather','hard','My grandmother knits a warm woolen sweater','Minun isoäiti kutoo lämpimän villapaidan','Miun ämmö tikuttau lämpimän villapaijan',null,'voices/hard/41.mp3');
        $this->create('weather','hard','I do not wear winter clothes on','En laita talvivaatteita päälle','En pane talvivuatteita piälle',null,'voices/hard/42.mp3');
        $this->create('weather','hard','Do not close the window','Älä laita ikkunaa kiinni ','Elä pane ikkunua kiini',null,'voices/hard/43.mp3');
        $this->create('weather','hard','It is thunder and lightning','Salamat lyö ja ukkonen jyrisee','Tulta isköy ta ukkoni jyräjäy',null,'voices/hard/44.mp3');
        $this->create('weather','hard','It is long winter in Karelia','Karjalassa on pitkä talvi','Karjalašša on pitkä talvi',null,'voices/hard/45.mp3');
        $this->create('weather','hard','Day is short and night is long in the winter','Talvella päivä on lyhyt ja yö on pitkä','Talvella päivä on lyhyt ta yö on pitkä',null,'voices/hard/46.mp3');
        $this->create('weather','hard','Summer is warm season','Kesä on lämmin vuodenaika','Kešä on lämmin vuuvvenaika',null,'voices/hard/47.mp3');
        $this->create('weather','hard','It snows a lot and it is dark in the winter','Talvella sataa paljon lunta ja on pimeää','Talvella šatau äijän lunta ta on pimie',null,'voices/hard/48.mp3');

        $this->create('body','hard','She is wearing an expensive dress','Hänellä on kallis mekko päällä','Hänellä on kallis mekko piällä',null,'voices/hard/49.mp3');
        $this->create('body','hard','I am wearing yellow shirt','Minulla on keltainen paita päällä','Miula on keltani paita piällä',null,'voices/hard/50.mp3');
        $this->create('body','hard','Child has a warm headwear','Lapsella on lämmin lakki päässä','Lapšella on lämmin lakki piässä',null,'voices/hard/51.mp3');
        $this->create('body','hard','Mother has red lips','Äidillä on punaiset huulet','Muamolla on ruškiet huulet',null,'voices/hard/52.mp3');
        $this->create('body','hard','Do you look like your father?','Oletko sinä isäsi näköinen?','Oletko šie tuaton näköni?',null,'voices/hard/53.mp3');
        $this->create('body','hard','Who do you look like?','Kenen näköinen sinä olet?','Kenen näköni šie olet?',null,'voices/hard/54.mp3');
        $this->create('body','hard','Mother has beautiful green eyes','Äidillä on kauniit vihreät silmät','Muamolla on kaunehet vihriet šilmät',null,'voices/hard/55.mp3');
        $this->create('body','hard','Shoes are in the foot and gloves are in the hand','Kengät ovat jalassa ja sormikkaat ovat käsissä','Kenkät ollah jalašša ta šormikkahat ollah kiäššä',null,'voices/hard/56.mp3');
        $this->create('body','hard','I put white shirt on','Laitoin valkoisen paidan päälle','Panin piällä valkien paijan',null,'voices/hard/57.mp3');
        $this->create('body','hard','I will put black shoes on the leg','Jalkaan laitan mustat kengät','Jalkah panen muššat kenkät',null,'voices/hard/58.mp3');
        $this->create('body','hard','What kind of shirt do you have on','Minkälainen paita sinulla on päällä','Mimmoni paita šiula on piällä?',null,'voices/hard/59.mp3');
        $this->create('body','hard','Grandmother has a short crey hair','Isoäidillä on lyhyet harmaat hiukset','Ämmöllä on lyhyöt harmuat tukat?',null,'voices/hard/60.mp3');
    }

    private function create($topic_name, $level, $english, $finnish, $viena_karelian, $picture, $voice) {
        \App\LearningObjective::create([
            'topic_name' => $topic_name,
            'level' => $level,
            'english' => $english,
            'finnish' => $finnish,
            'viena_karelian' => $viena_karelian,
            'picture' => $picture,
            'voice' => $voice,
            ]);
    }
}
