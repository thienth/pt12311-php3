<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Mail;

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

    public function sendMail($msg){
        Mail::send('emails.test', ['msg' => $msg], function ($message) {

            // $message->from('john@johndoe.com', 'John Doe');
        
            $message->to([
                'thienth@fpt.edu.vn', 
                'minhtie998@gmail.com',
            ]);
            $message->replyTo('haotv03@gmail.com', 'Hao hao');
            $message->subject('Test send email laravel');
            // $message->priority(3);
            // $message->attach('pathToFile');
        });

        return 'Send email successfully!';
    }
}
