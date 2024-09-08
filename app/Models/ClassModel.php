<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model {
  protected $table = 'classes';
  protected $fillable = ['name'];
  protected $hidden = ['created_at', 'updated_at'];

  public function classPhase() {
    return $this->hasMany(ClassPhase::class);
  }

  public function modules() {
    return $this->hasMany(Module::class);
  }

  public function learningActivity() {
    return $this->hasMany(LearningActivity::class);
  }
}