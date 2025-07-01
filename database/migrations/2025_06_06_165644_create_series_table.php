<?php

use App\Enums\StatusSeries;
use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('title')
                ->unique();
            $table->string('slug')
                ->unique();
            $table->text('description')
                ->nullable();
            $table->boolean('is_published')
                ->default(false);
            $table->timestamp('published_at')
                ->nullable();
            $table->string('score')
                ->nullable();
            $table->string('native_title')
                ->nullable();
            $table->string('english_title')
                ->nullable();
            $table->string('trailer')
                ->nullable();
            $table->string('duration')
                ->nullable();
            $table->boolean('is_featured')
                ->default(false);
            $table->string('status')
                ->default(StatusSeries::Unknown);
            $table->foreignIdFor(User::class, 'author_id')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreignIdFor(Country::class)
                ->nullonDelete()
                ->cascadeOnUpdate();
            // $table->string('poster')->nullable(); # already handled by Media Library
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('series');
    }
};
