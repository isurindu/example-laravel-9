@extends('layouts.app')

@section('content')

<div class="container">
<h1>Blogs </h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Post</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $row)
        <tr>
            <td>{{$row->title}}</td>
            <td>{{$row->post}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
