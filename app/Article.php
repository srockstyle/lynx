<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $table = 'articles';
  protected $fillable = [
    'title',
    'body',
    'user_id'
  ];
  public function user(){
    return $this->belongsTo('App\User');
  }
  public function tags(){
    return $this->belongsToMany('App\Tag', 'articles_tags', 'tag_id', 'article_id');
    // return $this->belongsToMany('App\Tag','tags')->withTimestamps();
  }
}
