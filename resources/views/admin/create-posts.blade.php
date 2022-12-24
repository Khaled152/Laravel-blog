@extends('admin.adminLayout.admin-layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create post</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      
    </div>
  
  </div>
</div>
<form method="POST" action="{{route('post.store')}}">
    <fieldset >
     
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">title</label>
        <input type="text" id="disabledTextInput" name="title" class="form-control" placeholder="Disabled input">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">description</label>
        <textarea type="text" id="disabledTextInput" name="description" class="form-control" placeholder="Disabled input"></textarea>
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  </form>
  @endsection