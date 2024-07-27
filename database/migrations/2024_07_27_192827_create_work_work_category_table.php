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
        Schema::create('work_work_category', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('work_id')->references('id')->on('works');
            $table->foreignUuid('work_category_id')->references('id')->on('work_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_work_category');
    }
};
