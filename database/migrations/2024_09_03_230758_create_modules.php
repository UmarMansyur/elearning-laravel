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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_id')->references('id')->on('classes')->cascadeOnDelete();
            $table->foreignId('teacher_id')->references('id')->on('teachers')->cascadeOnDelete();
            $table->foreignId('course_id')->references('id')->on('courses')->cascadeOnDelete();
            $table->string('title')->unique();
            $table->text('description');
            $table->boolean('is_active')->default(true);
            $table->string('file')->nullable();
            $table->string('is_public')->default(false);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('view_count')->default(0);
            $table->integer('like_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
