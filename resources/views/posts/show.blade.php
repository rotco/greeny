@extends('layouts.app')

@section('body')
    <h1>{{"Welcome to Show Post Page"}}</h1>
    <a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a>

@endsection
