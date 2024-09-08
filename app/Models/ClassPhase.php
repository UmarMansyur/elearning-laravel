<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Phase;

class ClassPhase extends Model {
  protected $table = 'class_phasess';
  protected $fillable = ['class_id', 'phase_id'];

  public function class() {
    return $this->belongsTo(ClassModel::class);
  }

  public function phase() {
    return $this->belongsTo(Phase::class);
  }
}