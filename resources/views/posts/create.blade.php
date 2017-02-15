@extends('layouts.blog') @section('content')
<div class="col-sm-8 blog-main">
    <h1>Publish a post</h1>
    <hr>
    @include('layouts.errors')
    <form method="post" action="/blog/public/posts"> {{ csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" id="title" name='title'> </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <textarea class="form-control" id="body" name='body'></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button> </div>
           </form>
</div> @endsection