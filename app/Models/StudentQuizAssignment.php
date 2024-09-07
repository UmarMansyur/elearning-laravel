<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentQuizAssignment extends Model {
  protected $table = 'student_quiz_assignment';
  protected $fillable = ['student_id', 'quiz_id', 'question_id', 'answer_id', 'score', 'is_correct'];
  protected $hidden = ['created_at', 'updated_at'];
}