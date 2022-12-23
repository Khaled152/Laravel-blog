@extends('admin.adminLayout.admin-layout')
@section('content')
<!--------------------------------------------------------------------------------------------->
<br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
       <a href="{{route('post.create')}}"> <button type="button" class="btn btn-sm btn-outline-secondary">CREATE</button></a>
        
      </div>
    
    </div>
  </div>


      <h2>All Posts</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">title</th>
              <th scope="col">description</th>
              <th scope="col">posted by</th>
              <th scope="col">created at</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
              <td>{{$post['id']}}</td>
              <td>{{$post['title']}}</td>
              <td>{{$post['descrption']}}</td>
              <td>{{$post['posted_by']}}</td>
              <td>{{$post['created_by']}}</td>
              <td>
               <a href="{{ route('show.post',['post'=> $post['id']])}}"> <button type="button" class="btn btn-primary">View</button></a>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>

              </td>
@endforeach
            </tr>
     
          </tbody>
        </table>
      </div>

      <!--------------------------------------------------------------------------------------------->
@endsection
   