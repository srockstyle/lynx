<?php

namespace App\Http\Controllers;
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

    public function getShow(){
    }

    public function getCreate(){
    }

    public function getEdit(){
    }

    public function postCreate(){
    }

    public function postEdit(){
    }

    public function postDelete(){
    }
}
