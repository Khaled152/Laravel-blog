@extends('admin.adminLayout.admin-layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">show post</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
   
      
    </div>
  
  </div>
</div>
<div class="card">
    <div class="card-header">
      Title
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$post['title']}}</h5>
     
    </div>
  </div>
  <br>
  <br>
  <div class="card">
    <div class="card-header">
      description
    </div>
    <div class="card-body">
      <p class="card-text">{{$post['descrption']}}</p>
      
    </div>
  </div>
  
@endsection