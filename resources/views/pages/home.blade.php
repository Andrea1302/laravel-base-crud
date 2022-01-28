@extends('layouts.main-layout')

@section('content')
<div class="home">
    <ul>
        @foreach ($comics as $comic)
        <li>
            <a href="{{route('show', $comic -> id )}}">
                {{$comic -> title}}
            </a>
        </li>
        @endforeach
       
    </ul>
</div>
    
@endsection