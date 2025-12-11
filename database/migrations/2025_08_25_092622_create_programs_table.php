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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('category_program_id')->constrained('category_programs')->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignId('category_id')->constrained(
                table: 'categories',
                indexName: 'programs_category_id'
            )
                ->cascadeOnDelete();
            $table->string('photo')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
