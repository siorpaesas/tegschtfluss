<?php

namespace Database\Seeders;

use App\Models\Build;
use App\Models\Chapter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $firstChapter = Chapter::first();

        Build::factory()->create([
            'chapter_id' => $firstChapter->id,
            'words' => '2842',
            'length' => '5',
            'message' => 'Seeded Update',
            'created_at' => '01.01.2024'
        ]);

        Build::factory()->create([
            'chapter_id' => $firstChapter->id,
            'words' => '3486',
            'length' => '6',
            'message' => 'Seeded Update',
            'created_at' => '24.02.2024'
        ]);

        Build::factory()->create([
            'chapter_id' => $firstChapter->id,
            'words' => '4685',
            'length' => '9',
            'message' => 'Seeded Update',
            'created_at' => '04.04.2024'
        ]);
    }
}
