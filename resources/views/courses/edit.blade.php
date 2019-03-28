@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="title">Edit Course</h1>
        <form method="POST" action="/course/{{$course->id}}">

            @method('PATCH')
            @csrf

            <div class="field">
                <label for="name" class="label">Name</label>

                <div class="control">
                    <input type="text" class="input" name="name" placeholder="Name" value="{{$course->name}}" required>
                </div>
            </div>
            <br>
            <div class="field">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        
        </form>
        <br>
        <form method="POST" action="/course/{{$course->id}}">

            @method('DELETE')
            @csrf

            <div class="field">
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
</div>
@endsection
