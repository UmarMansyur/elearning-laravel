<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {
  public $table = 'courses';
  public $fillable = ['name'];
  
}