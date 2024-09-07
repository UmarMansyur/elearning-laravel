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
        Schema::create('learning_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->references('id')->on('teachers');
            $table->foreignId('course_id')->references('id')->on('courses');
            $table->foreignId('academyc_year_id')->references('id')->on('academyc_year');
            $table->foreignId('class_id')->references('id')->on('classes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning_activities');
    }
};
