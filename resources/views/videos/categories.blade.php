@extends('layouts.app')

@section('content')
<div>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <form action="/search" method="GET">
        {{csrf_field()}}
        <input type="text" class="form-control" name="search" placeholder="Search">
        <button class="btn btn-default-sm" type="submit">Search</button>
    </form>
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            @foreach($videos as $video)
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{$video->categories}}  <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <p class="dropdown-item">{{$video->name}}</p>
                                <p class="dropdown-item">{{$video->description}}</p>
                                <button type="submit" class="button is-link dropdown-item"><a href="/videos/{{$video->id}}/edit">Edit</a></button>
                            </div>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </nav>

    
    <div class="field">
        <button type="submit" class="button is-link"><a href="/videos/create">Create New</a></button>
    </div>
</div>
@endsection

