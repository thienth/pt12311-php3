<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class HomeController extends Controller
{
    public function index(Request $rq){

    	$keyword = $rq->keyword;
    	$posts = Post::where('title', 'like', "%$keyword%")
    					->paginate(10);
		$posts->withPath("?keyword=$keyword");
    	return view('welcome', compact('posts'));
    }

    public function removePost($id){
    	$model = Post::find($id);
    	if($model != null){
    		$model->delete();
    	}
    	return redirect()->back();
    }

    public function add(){
        $model = new Post();

        return view('post.form', ['model' => $model]);
    }

    public function update($id){
        $model = Post::find($id);

        if(!$model) return redirect()->route('homepage');
        
        return view('post.form', ['model' => $model]);
    }

    public function save(Request $rq){
        if($rq->id){
            $model = Post::find($rq->id);
        }else{
            $model = new Post();
        }
        
        $model->fill($rq->all());
        $model->save();

        return redirect()->route('homepage');

    }
}
