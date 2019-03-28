@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">
@if (app()->isLocal())
  <script src="{{ asset('js/app.js') }}"></script>
@else
  <script src="{{ mix('js/manifest.js') }}"></script>
  <script src="{{ mix('js/vendor.js') }}"></script>
  <script src="{{ mix('js/app.js') }}"></script>
@endif

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table>
            <tr>
                <td>Id</td>

            </tr>
            @foreach($coursess as $course)
            <tr>
                <td>{{$course->id}}</td>
                <td>{{$course->name}}</td>
                <form action="/auth" method="GET">
                <td>
                    <button type="submit" class="button is-link"><a href="/courses/{{$course->id}}/edit">Edit</a></button>
                </td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
        <form action="/auth" method="GET">
            <div class="field">
                <button type="submit" class="btn is-link btn-success"><a href="/courses/create">Create New</a></button>
            </div>
        </form>
</div>
@endsection