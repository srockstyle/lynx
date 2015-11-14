<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $table = 'tags';
  protected $fillable = [
    'name',
  ];

  public function user(){
    return $this->belongsTo('App\User');
  }
  public function articles(){
    return $this->belongsToMany('App\Article', 'articles_tags', 'tag_id', 'article_id');
  }
}
