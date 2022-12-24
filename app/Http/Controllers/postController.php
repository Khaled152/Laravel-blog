<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
       $posts=Post::all();
      return view('admin.admin',[
        'posts'=>$posts
    ]);
    }

   

    public function show($post){
        $post=  Post::find($post);
     
       return view('admin.show-posts',[
         'post'=>$post
     ]);

     }



     public function create(){
      
        return view('admin.create-posts');
      }
       
     public function store(){
      $requestData = request();
        return redirect()->route('post.index');
      }
  

     
}
