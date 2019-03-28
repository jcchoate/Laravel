@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="title">Edit Videos</h1>
        <form method="POST" action="/video/{{$video->id}}">

            @method('PATCH')
            @csrf

            <div class="field">
                <label for="name" class="label">Name</label>

                <div class="control">
                    <input type="text" class="input" name="name" placeholder="Name" value="{{$video->name}}" required>
                </div>
            </div>

            <div class="field">
                <label for="description" class="label">Description</label>

                <div class="control">
                    <textarea name="description" class="textarea" value="{{$video->description}}" required></textarea>
                </div>
            </div>

            <div class="field">
                <label for="category" class="label">Category</label>

                <div class="control">
                    <textarea name="category" class="textarea" value="{{$video->categories}}" required></textarea>
                </div>
            </div>

            <div class="field">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        
        </form>
        <form method="POST" action="/video/{{$video->id}}">

            @method('DELETE')
            @csrf

            <div class="field">
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
</div>
@endsection
