<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Module extends Model {
  protected $table = 'modules';
  protected $fillable = ['class_id', 'teacher_id', 'course_id', 'title'];
  protected $hidden = ['created_at', 'updated_at'];
}