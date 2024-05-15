<?php

use App\Models\Chapter;
use App\Models\Note;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->text('todo');
            $table->text('done')->nullable();
            $table->enum('prio', ['low', 'medium', 'high']);
            $table->tinyInteger('status', unsigned: true);
            $table->timestamps();
        });

        Schema::create('chapter_note', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Chapter::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Note::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
        Schema::dropIfExists('chapter_note');
    }
};
