<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Chapter;
use App\Models\Note;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed Blaus Bluet's database.
     */
    public function run(): void {
        Book::factory()->create([
            'name' => 'Blaus Bluet',
            'author' => 'Flow Bee (siorpaesas)',
            'year' => 2024
        ]);

        $bookId = Book::first()->id;

        Chapter::factory()->create([
            'book_id' => $bookId,
            'name' => 'E Donnschti Nami Mit Uniformierte',
            'excerpt' => 'Lings blinke und rächts abbiege. Haha, gitz dümmeri Lüt aus Outofahrer? – Mau abgseh vo däm usgflippte Country-Road-Chaschperli däne im grosse Texas, wo sech am liebschte no sis Zmorgemüesli mit Ärdöu würd mache? - I gloubes nid!',
            'sequence' => 1
        ]);
        Chapter::factory()->create([
            'book_id' => $bookId,
            'name' => 'Es Gheimnis',
            'excerpt' => 'Es mues ungefähr um die sibni am Abe gsi si, wos plötzlech ar Türe glütet het. Z’erschte mau hanis gar nid ghört, wüu i z Soundsystem chli z lut ha ufdräit gha. I bi immer no im Huus vom Mami gsi und ha im Wohnzimmer grad e heisse Streife gluegt zum e chli abreagiere vo de Ereignis vom Namitag.',
            'sequence' => 2
        ]);
        Chapter::factory()->create([
            'book_id' => $bookId,
            'name' => 'Storm Watcher',
            'excerpt' => 'Am nächschte Morge hets mi zimli früe zum Bett usgnoh. I ha vom Vortag tröimt und ha wäg däm nume sehr churz u schlächt chönne schlafe. Wahrschiinlech isch tatsächlech der Bourbon tschuld gsi a de komische Tröim. Tja, säuber tschuld!',
            'sequence' => 3
        ]);
        Chapter::factory()->create([
            'book_id' => $bookId,
            'name' => 'E Unerwartete Zuefau',
            'excerpt' => 'Wo z Spektaku verbi isch gsi, hani chaut übercho und mer es paar Chleider meh ume Körper ghänkt. I bi abe is Wohnzimmer und ha d‘Kafimaschine aagworfe. Dert isch es paar Minute speter Tropf um Tropf ines Tassli inegheit und drus het sech langsam es Espresso biudet.',
            'sequence' => 4
        ]);
        Chapter::factory()->create([
            'book_id' => $bookId,
            'name' => 'Ougenuschratze 2.0',
            'excerpt' => 'Der Nils und d\'Lea löhs la Krache',
            'sequence' => 8
        ]);

        $firstChapter = Chapter::first();

        Note::factory()->create([
            'todo' => 'Z erschte Kapitu mues eh no neu gschribe wärde.',
            'prio' => 'low',
            'status' => 0
        ]);

        $firstChapter->note()->attach(1);

        Note::factory()->create([
            'todo' => 'Es sötte no chli meh Passante z gseh si und chli meh Interaktion mit ihne.',
            'prio' => 'medium',
            'status' => 0
        ]);

        $firstChapter->note()->attach(2);

        Note::factory()->create([
            'todo' => 'Der Nils darf nid eifach wägloufe vor Szene.',
            'prio' => 'high',
            'status' => 0
        ]);

        $firstChapter->note()->attach(3);

        Note::factory()->create([
            'todo' => 'Der Polizischt sött nid ganz sone fiischtere Iidruck hingerlah.',
            'done' => 'Er verzeut itz sogar chli, wies sött loufe amene Umfauort.',
            'prio' => 'high',
            'status' => 1
        ]);

        $firstChapter->note()->attach(4);
    }
}
