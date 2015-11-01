<?php

namespace App\Http\Controllers\Article;
use App\Article;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ArticleAdminController extends BaseController {
    /**
     Article Admin Controller
     */
    protected $article;
    public function __construct(Article $article){
      $this->article = $article;
    }
    public function getIndex(){
      $articles = $this->article->all();
      return view('articles.admin.index')->with(compact('articles'));
    }

    public function getEdit($id){
      $article = $this->article->find($id);
      return view('articles.admin.edit')->with(compact('article'));
    }

    public function getNew(){
      return view('articles.admin.new')->with(compact('article'));
    }

    public function postCreate(Request $request){
			$data = $request->all();
			$this->article->fill($data);
      $this->article->save();
			$id = $this->article->id;
      return redirect()->to("/ln-admin/articles/{$id}/edit");
    }

    public function postUpdate(Request $request){
      var_dump($request->all());
      $id = intval($request->all()["id"]);
      $article = $this->article->find($id);
      $data = $request->all();
      $article->fill($data);
      $article->save();
      return redirect()->to("/ln-admin/articles/{$id}/edit");
    }

		public function postDelete(Request $request){
      $id = intval($request->all()["id"]);
			$article = $this->article->find($id);
			$article->delete();
      return redirect()->to('/ln-admin/articles');
    }

}
