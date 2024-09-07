<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model {
  protected $table = 'topics';
  protected $fillable = ['module_id', 'title', 'description', 'duration'];
}