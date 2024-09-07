<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model {
  protected $table = 'quizzes';
  protected $fillable = [
    'topic_id', 'title', 'description', 'number_of_question', 'duration', 'start_date', 'end_date', 'max_score', 'bobot'
  ];
  protected $hidden = ['created_at', 'updated_at'];
}