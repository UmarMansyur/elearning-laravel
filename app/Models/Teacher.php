<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
  protected $table = 'teachers';
  protected $fillable = ['nuptk', 'name', 'address', 'gender', 'dob', 'pob'];
  protected $hidden = ['created_at', 'updated_at'];

  public function user()
  {
    return $this->belongsTo(User::class);
  } 
}
