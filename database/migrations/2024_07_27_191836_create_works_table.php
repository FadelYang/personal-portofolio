<?php

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
        Schema::create('works', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->require()->unique();
            $table->string('slug')->require()->unique();
            $table->string('subtitle')->nullable();
            $table->string('thumbnail')->require();
            $table->string('short_description')->require();
            $table->text('content')->require();
            $table->string('github_repository_link')->nullable();
            $table->string('production_link')->nullable();
            $table->boolean('is_publish')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
