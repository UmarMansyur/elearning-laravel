<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model {
  protected $table = 'assignments';
  protected $fillable = ['topic_id', 'title', 'description', 'is_group', 'max_group_member', 'count_group_member', 'start_date', 'due_date', 'max_score', 'bobot'];
  protected $hidden = ['created_at', 'updated_at'];
}