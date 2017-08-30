@extends('layouts.app')

@section('body')
    <h1>{{"Welcome to Show Post Page"}}</h1>
    {{--<a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a>--}}
    <ul>
        @foreach($post['attributes'] as $k=>$v)
            <li>
                <a href="{{route('posts.edit',$post->id)}}">{{$k." - ".$v}}</a>
            </li>
        @endforeach
    </ul>


    @if ($image=$post->images->find($post->image_id))
        <div class="image-container">
            <img src="/images/{{$image->filename}} "/>
        </div>



    @endif

@endsection
