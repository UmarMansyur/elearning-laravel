<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model {
  protected $table = 'answers';
  protected $fillable = ['question_id', 'answer', 'is_correct', 'score'];
  protected $hidden = ['created_at', 'updated_at'];

  public function question() {
    return $this->belongsTo(Question::class);
  }
}