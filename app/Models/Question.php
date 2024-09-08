<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Question extends Model {
  protected $table = 'questions';
  protected $fillable = ['quiz_id', 'question'];
  protected $hidden = ['created_at', 'updated_at'];

  public function quiz() {
    return $this->belongsTo(Quiz::class);
  }

  public function answers() {
    return $this->hasMany(Answer::class);
  }
}