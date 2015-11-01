<?php

namespace App\Http\Controllers\Article;
use App\Article;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ArticlesController extends BaseController
{
    /**
     Article
     */
    protected $article;
    public function __construct(Article $article){
      $this->article = $article;
    }
    public function getIndex(){
      $articles = $this->article->all();
      return view('articles.index')->with(compact('articles'));
    }

    public function getShow($id){
      $article = $this->article->find($id);
      return view('articles.show')->with(compact('article'));
    }

    public function getTagIndex($tag_id){
      $articles = $this->article->all();
      return view('articles.index')->with(compact('articles'));
    }

}
