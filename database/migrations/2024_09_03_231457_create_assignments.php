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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('topic_id')->constrained('topics')->cascadeOnDelete();
            $table->string('title')->unique();
            $table->text('description');
            $table->boolean('is_group')->default(false);
            $table->integer('max_group_member')->nullable();
            $table->integer('count_group_member')->nullable();
            $table->date('start_date');
            $table->date('due_date');
            $table->double('max_score')->default(100);
            $table->double('bobot')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
