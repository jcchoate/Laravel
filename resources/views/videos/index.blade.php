@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Description</td>
            </tr>
            @foreach($videos as $video)
            <tr>
                <td>{{$video->id}}</td>
                <td>{{$video->name}}</td>
                <td>{{$video->description}}</td>
                <td>{{$video->categories}}</td>
                <form action="/auth" method="GET">
                <td>
                    <button type="submit" class="button is-link"><a href="/videos/{{$video->id}}/edit">Edit</a></button>
                </td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
        <form action="/auth" method="GET">
            <div class="field">
                <button type="submit" class="button is-link"><a href="/videos/create">Create New</a></button>
            </div>
        </form>
</div>
@endsection