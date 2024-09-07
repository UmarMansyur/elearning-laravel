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
        Schema::create('student_quiz_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreignId('quiz_id')->references('id')->on('quizzes')->onDelete('cascade');
            $table->foreignId('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->foreignId('answer_id')->references('id')->on('answers')->onDelete('cascade');
            $table->double('score')->default(0);
            $table->boolean('is_correct')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_quiz_assignments');
    }
};
