<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'posts';
  protected $fillable = ['user_id', 'title', 'body'];

  /* Relations */
  public function owner() {
    return $this->belongsTo(User::class, 'user_id');
  }

  /**
   * get show post route
   *
   * @return string
   */
  public function path()
  {
      return "/posts/{$this->id}";
  }
}
