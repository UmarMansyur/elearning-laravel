<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearningActivity extends Model {
  protected $table = 'learning_activities';
  protected $fillable = ['teacher_id', 'course_id', 'academyc_year_id', 'class_id'];
}