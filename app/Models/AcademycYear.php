<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AcademycYear extends Model {
  protected $table = 'academyc_year';
  protected $fillable = ['year', 'semester', 'status'];
  protected $hidden = ['created_at', 'updated_at'];

  public function learningActivity() {
    return $this->hasMany(LearningActivity::class);
  }

  
}