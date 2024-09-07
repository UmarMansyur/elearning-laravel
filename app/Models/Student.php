<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
  protected $table = 'students';
  protected $fillable = ['nisn', 'name', 'name', 'address', 'gender', 'dob', 'pob'];
  protected $hidden = ['created_at', 'updated_at'];
}