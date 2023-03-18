<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class PostConstroller extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
       $name=Auth::User()->name;
        $posts=Post::all();
        return view('index',compact('posts','name'));
    }
    public function create(){
        return view('creat');
    }
    public function show(){
        if(Auth::User()->is_admine){
            $posts=Post::all();
        }
        else{
            $posts=Post::where('user_id',Auth::User()->id)->get();
        }

    
        
        return view('Show',compact('posts'));
    }
    public function afficher($id){
        $post=Post::find($id);
        return view('ShowPost',compact('post'));
    }
    public function store(Request $request){
        $posts=new Post();
            $posts->user_id=Auth::User()->id;
            $posts->Title=$request->input('title');
            $posts->Presentation=$request->input('presentation');
        $posts->save();
        return redirect()->route('Post');
    }
    public function edite($id){
        $post=Post::find($id);
        $this->authorize('update',$post);
        return view('Edite',compact('post'));
    }
    public function update(Request $request,$id){
        $posts=Post::find($id);
        $posts->Title=$request->input('title');
        $posts->Presentation=$request->input('presentation');
        $posts->save();
    return redirect()->route('Post');
    }
    public function destroy($id){
        $posts=Post::find($id);
        $this->authorize('delete',$posts);
        $posts->delete();
        return redirect()->route('Post');
    }
}
