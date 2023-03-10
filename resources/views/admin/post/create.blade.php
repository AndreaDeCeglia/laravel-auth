@extends('layouts.app')

@section('content')


<div class="container p-5">

    <h1 class="text-center p-4">insert a New Post</h1>

    <form method="POST" action="{{route('admin.post.store')}}">

        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Post</button>

    </form>

</div>

@endsection