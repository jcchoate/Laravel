@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="title">New Course</h1>
        <form method="POST" action="/course">

            {{csrf_field()}}

            <div class="field">
                <label for="name" class="label">Name</label>

                <div class="control">
                    <input type="text" class="input {{$errors->has('title') ? 'is-danger' : ''}}" name="name" placeholder="Name" value="{{ old('name') }}" required>
                </div>
            </div>


            <div class="field">
                <button type="submit" class="button is-link">Create Course</button>
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
