<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Module extends Model {
  protected $table = 'modules';
  protected $fillable = ['class_id', 'teacher_id', 'course_id', 'title'];
  protected $hidden = ['created_at', 'updated_at'];

  public function class() {
    return $this->belongsTo(ClassModel::class);
  }

  public function teacher() {
    return $this->belongsTo(User::class);
  }

  public function course() {
    return $this->belongsTo(Course::class);
  }

  public function learningActivity() {
    return $this->hasMany(LearningActivity::class);
  }

  public function topic() {
    return $this->hasMany(Topic::class);
  }
}