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
            'The Kalevala, the Finnish national epic, has been translated into over sixty languages and it is Finland\'s most translated work of literature.',
            'Kalevala, Suomen kansalliseepos, on käännetty yli 60 kielelle ja se on Suomen kirjallisuuden käännetyin teos.'
        );
        $this->create(
            'The first version of The Kalevala (called The Old Kalevala) was published in 1835.',
            'Ensimmäinen versio Kalevalasta (nimeltään Vanha Kalevala) ilmestyi vuonna 1835.'
        );
        $this->create(
            'The Kalevala version most commonly known today was first published in 1849 and consists of 22,795 verses, divided into 50 folk stories.',
            'Kalevalan tunnetuin versio ilmestyi vuonna 1849 ja se sisältää 22,795 säkeistöä jaettuna 50 kansantarinaan.'
        );
        $this->create(
            'The most known version of the Kalevala (New Kalevala) was first stranslated to Swedish in 1841. Finally in 2015 The Kalevala was published in its originating Karelian language (Viena Karelian).',
            'Tunnetuin Kalevalan versio (Uusi Kalevala)  käännettiin ensimmäisen ruotsiksi vuonna 1841. Viimein vuonna 2015 Kalevala käännettiin sen alkuperäiselle Karjalan kielelle vienankarjalaksi.'
        );
    }

    private function create($english, $finnish) {
        \App\CulturalInformation::create([
            'english' => $english,
            'finnish' => $finnish,
        ]);
    }
}
