<?php

use App\Models\Genre;
use App\Models\Series;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('series_genres', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Series::class)
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreignIdFor(Genre::class)
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('series_genres');
    }
};
