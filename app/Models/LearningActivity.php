<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearningActivity extends Model {
  protected $table = 'learning_activities';
  protected $fillable = ['teacher_id', 'course_id', 'academyc_year_id', 'class_id'];

  public function teacher() {
    return $this->belongsTo(User::class);
  }

  public function course() {
    return $this->belongsTo(Course::class);
  }

  public function academycYear() {
    return $this->belongsTo(AcademycYear::class);
  }

  public function class() {
    return $this->belongsTo(ClassModel::class);
  }
}