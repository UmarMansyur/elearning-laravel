<?php
namespace App\Models;
use App\Models\ClassPhase;
use Illuminate\Database\Eloquent\Model;

class Phase extends Model {
  protected $table = 'phases';
  protected $fillable = ['name'];

  public function classPhase() {
    return $this->hasMany(ClassPhase::class);
  }
}