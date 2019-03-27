@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="title">New Video</h1>
        <form method="POST" action="/video">

            {{csrf_field()}}

            <div class="field">
                <label for="name" class="label">Name</label>

                <div class="control">
                    <input type="text" class="input {{$errors->has('title') ? 'is-danger' : ''}}" name="name" placeholder="Name" value="{{ old('name') }}" required>
                </div>
            </div>

            <div class="field">
                <label for="description" class="label">Description</label>

                <div class="control">
                    <textarea name="description" class="textarea {{$errors->has('title') ? 'is-danger' : ''}}" value="{{ old('description') }}" required></textarea>
                </div>
            </div>

            <div class="field">
                <label for="categories" class="label">Category</label>

                <div class="control">
                    <textarea name="categories" class="textarea {{$errors->has('title') ? 'is-danger' : ''}}" value="{{ old('categories') }}" required></textarea>
                </div>
            </div>

            <div class="field">
                <button type="submit" class="button is-link">Post Video</button>
            </div>
            @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)

                        <li>{{$error}}</li>

                    @endforeach
                </ul>
            </div>
            @endif
        
        </form>
</div>
@endsection
