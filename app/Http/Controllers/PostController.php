<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }
    public function index()
    {

        $posts = Post::latest()
            ->filter(request(['month','year']))
            ->get();
        
//        if($month = request('month')) {
//            $posts->whereMonth('created_at', Carbon::parse($month)->month);
//        }
//        if($year = request('year')) {
//            $posts->whereYear('created_at', $year);
//        }
//        $posts = $posts->get();
        
//        $ 
        
        return view('posts.index',compact('posts'));
    }
    
    public function create(){
        return view('posts.create');
    }
    
    public function show(Post $post)
    {
        
        return view('posts.show',compact('post'));
        //return view('posts.show',compact('post'));
    }
    
    public function store()
    {
        $this->validate(request(),[
            'title' => 'required',
            'body'  => 'required'
        ]);
        auth()->user()->publish(new Post(request(['title','body'])));
        session()->flash('message','You post has been published.');
        
        return redirect('/');
    }    
    
}
