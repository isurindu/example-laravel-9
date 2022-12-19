@extends('layouts.app')

@section('content')

<div class="container">

<h1>Create Blogs </h1>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST">
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" />
    </div>
    <div class="form-group">
        <label>Post</label>
        <textarea class="form-control" name="post" rows="5"></textarea>
    </div>
    <div class="mt-2">
        <button type="submit" class="btn btn-success">Create Blog</button>
    </div>
    @csrf
</form>
</div>
@endsection
