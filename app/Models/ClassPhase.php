<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassPhase extends Model {
  protected $table = 'class_phasess';
  protected $fillable = ['class_id', 'phase_id'];
}