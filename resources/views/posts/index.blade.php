@extends('layouts.app')

@section('body')
    <ul>
        @foreach($posts as $post)
            <li>
                {{$post->title}}

            </li>
        @endforeach
    </ul>

@endsection
