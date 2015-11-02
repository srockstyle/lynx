<?php

namespace App\Http\Controllers\Tag;
use App\Tag;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class TagAdminController extends BaseController {
    /**
     Tag Admin Controller
     */
    protected $tag;
    public function __construct(Tag $tag){
      $this->tag = $tag;
    }
    public function getIndex(){
      $tags = $this->tag->all();
      return view('tags.admin.index')->with(compact('tags'));
    }

    public function getEdit($id){
      $tag = $this->tag->find($id);
      return view('tags.admin.edit')->with(compact('tag'));
    }

    public function getNew(){
      return view('tags.admin.new')->with(compact('tag'));
    }

    public function postCreate(Request $request){
			$data = $request->all();
			$this->tag->fill($data);
      $this->tag->save();
			$id = $this->tag->id;
      return redirect()->to("/ln-admin/tags/{$id}/edit");
    }

    public function postUpdate(Request $request){
      var_dump($request->all());
      $id = intval($request->all()["id"]);
      $tag = $this->tag->find($id);
      $data = $request->all();
      $tag->fill($data);
      $tag->save();
      return redirect()->to("/ln-admin/tags/{$id}/edit");
    }

		public function postDelete(Request $request){
      $id = intval($request->all()["id"]);
			$tag = $this->tag->find($id);
			$tag->delete();
      return redirect()->to('/ln-admin/tags');
    }

}
