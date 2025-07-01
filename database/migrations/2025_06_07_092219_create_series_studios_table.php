<?php

use App\Models\Series;
use App\Models\Studio;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('series_studios', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Series::class)
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreignIdFor(Studio::class)
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
        Schema::dropIfExists('series_studios');
    }
};
