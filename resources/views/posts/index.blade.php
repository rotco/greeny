@extends('layouts.app')

@section('body')
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>

            </li>
        @endforeach
    </ul>

@endsection
