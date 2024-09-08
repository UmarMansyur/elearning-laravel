<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAssignment extends Model {
  protected $table = 'student_assignments';
  protected $fillable = ['student_id', 'assignment_id', 'status', 'file', 'comment', 'score'];
  protected $hidden = ['created_at', 'updated_at'];

  public function student() {
    return $this->belongsTo(User::class);
  }

  public function assignment() {
    return $this->belongsTo(Assignment::class);
  }
}