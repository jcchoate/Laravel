@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="title">Edit Videos</h1>
        <form method="POST" action="/videos/{{$video->id}}">

            {{ method_field('PATCH') }}
            {{csrf_field()}}

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
                <button type="submit" class="button is-link">Update Video</button>
            </div>
        
        </form>
        <form method="POST" action="/videos/{{$video->id}}">

            {{ method_field('DELETE') }}
            {{ csrf_field() }}

            <div class="field">
                <button type="submit" class="button">Delete Video</button>
            </div>
        </form>
</div>
@endsection