<?php

namespace App\Http\Controllers\Article;
use App\Article;
use App\Tag;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ArticlesController extends BaseController
{
    /**
     Article
     */
    protected $article;
    protected $tag;

    public function __construct(Article $article){
      $this->article = $article;
    }
    public function getIndex(){
      $articles = $this->article->all();
      return response()->json($articles);
    }

    public function getShow($id){
      $article = $this->article->find($id);
      return response()->json($article);
    }

    public function getTagIndex($tag_id){
      $tag = Tag::find($tag_id);
      $articles = $tag->articles;
      return response()->json($articles);
    }

}
