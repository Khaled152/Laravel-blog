<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
       $posts=[
       ['id'=>1,'title'=>'java','descrption'=>'this first post','posted_by'=>'khaled','created_by'=>'2022-10-13'],
       ['id'=>2,'title'=>'laravle','descrption'=>'this sceonde post','posted_by'=>'youssef','created_by'=>'2022-10-13']
    ];
      return view('admin.admin',[
        'posts'=>$posts
    ]);
    }

   

    public function show($post){
        $post=  ['id'=>1,'title'=>'java','descrption'=>'this first post','posted_by'=>'khaled','created_by'=>'2022-10-13'];

     
       return view('admin.show-posts',[
         'post'=>$post
     ]);
     }
     public function create(){
      
        return view('admin.create-posts');
      }
  
}
