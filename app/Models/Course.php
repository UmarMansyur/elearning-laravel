<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {
  public $table = 'courses';
  public $fillable = ['name'];
  
  public function module() {
    return $this->hasMany(Module::class);
  }

  public function learningActivity() {
    return $this->hasMany(LearningActivity::class);
  }
}