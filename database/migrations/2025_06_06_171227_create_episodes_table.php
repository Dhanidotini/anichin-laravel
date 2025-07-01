<?php

use App\Models\Series;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('number')
                ->comment('Episode number in the series')
                ->nullable();
            $table->text('url_video')->nullable();
            $table->bigInteger('duration')->nullable();
            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->softDeletes();
            $table->foreignIdFor(Series::class)
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreignIdFor(User::class, 'author_id')
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
        Schema::dropIfExists('episodes');
    }
};
