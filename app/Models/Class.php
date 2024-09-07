<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model {
  protected $table = 'classes';
  protected $fillable = ['name'];
  protected $hidden = ['created_at', 'updated_at'];
}