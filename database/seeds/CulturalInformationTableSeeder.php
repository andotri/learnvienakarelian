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
        $this->create(
            'The most known version of the Kalevala (New Kalevala) was first translated to Swedish in 1841. Finally in 2015 The Kalevala was published in its originating Karelian language (Viena Karelian).',
            'Tunnetuin Kalevalan versio (Uusi Kalevala)  käännettiin ensimmäiseksi ruotsiksi vuonna 1841. Viimein vuonna 2015 Kalevala käännettiin sen alkuperäiselle Karjalan kielelle vienankarjalaksi.',
            'images/cultural_information/photo1.jpg'
        );
        $this->create(
            'The Kalevala, the Finnish national epic, has been translated into over sixty languages and it is Finland\'s most translated work of literature. Raisa Renšujeva translated the Kalevala in Viena Karelian.',
            'Kalevala, Suomen kansalliseepos, on käännetty yli 60 kielelle ja se on Suomen kirjallisuuden käännetyin teos. Raisa Renšujeva käänsi Kalevalan vienankarjalaksi.',
            'images/cultural_information/photo2.jpg'
        );
        $this->create(
            'The most commonly known version of the Kalevala  (New Kalevala) was published in 1849. It includes 22,795 verses and is divided into 50 folk stories.',
            'Kalevalan tunnetuin versio ilmestyi vuonna 1849 ja se sisältää 22,795 säkeistöä jaettuna 50 kansantarinaan.',
            'images/cultural_information/photo3.jpg'
        );
        $this->create(
            'Each year Karjalan Sivistysseura organises Heimopäivät, which gets together Karelians from Finland and the Republic of Karelia. In this year, the 113th Heimopäivät was organised in Jyväskylä.',
            'Joka vuosi Karjalan Sivistysseura järjestää Heimopäivät, johon kokoontuu karjalaisia Suomesta ja Karjalan Tasavallasta. Tänä vuonna 113. Heimopäivät järjestettiin Jyväskylässä.',
            'images/cultural_information/photo4.jpg'
        );
        $this->create(
            'Each village in Viena use to have its own pattern in mittens. These are example models from North Viena.',
            'Vienan joka kylällä oli tapana olla oma kuvio lapasissa. Nämä ovat esimerkkejä Pohjois-Vienan malleista.',
            'images/cultural_information/photo5.jpg'
        );
        $this->create(
            'The first version of The Kalevala (called The Old Kalevala) was published in 1835.',
            'Ensimmäinen versio Kalevalasta (nimeltään Vanha Kalevala) ilmestyi vuonna 1835.',
            'images/cultural_information/photo6.jpg'
        );
        $this->create(
            'Oma Mua newspaper is published weekly and articles are written in Karelian (in Viena Karelian or Livvi-Karelian). It can be ordered as a paper or digital format.',
            'Oma Mua sanomalehti ilmestyy viikottain ja artikkelit on kirjoitettu Karjalan kielellä (vienankarjalaksi tai livvinkarjalaksi). Lehden voi tilata paperisena tai digitaalisena.',
            'images/cultural_information/photo7.jpg'
        );
        $this->create(
            'Oma Mua newspaper provides Karelian related news from Finland and the Republic of Karelia.',
            'Oma Mua lehti toimittaa karjala-aiheisia uutisia Suomesta ja Karjalan Tasavallasta.',
            'images/cultural_information/photo8.jpg'
        );
        $this->create(
            'Periodika publisher\'s Šanalipaš book teaches Viena karelian for children and beginners.',
            'Periodika kustantamon julkaisema Šanalipaš-kirja opettaa vienankarjalaa lapsille ja vasta-alkajille.',
            'images/cultural_information/photo9.jpg'
        );
        $this->create(
            'Olga Karlova\'s "Vienankarjalan alkeiskuršši" can be studied online: http://avtor.karelia.ru/elbibl/karlova/vienankarjalan/index.html#1.',
            'Olga Karlovan ʺVienankarjalan alkeiskurššia" voi opiskelella verkossa: http://avtor.karelia.ru/elbibl/karlova/vienankarjalan/index.html#1.',
            'images/cultural_information/photo10.jpg'
        );
    }

    private function create($english, $finnish, $picture) {
        \App\CulturalInformation::create([
            'english' => $english,
            'finnish' => $finnish,
            'picture' => $picture,
        ]);
    }
}
