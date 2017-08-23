@extends('layouts.app')

@section('body')
    <div class="container">
        <h2>Edit page</h2>
        {!! Form::model($post,['method'=>'PATCH','action'=>['PostsController@update',$post->id]]) !!}
        {{csrf_field()}}
        <div class="form-group">
            {!! Form::label('user_id','user_id') !!}
            {!! Form::text('user_id',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id','category_id') !!}
            {!! Form::text('category_id',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('subcategory_id','subcategory_id') !!}
            {!! Form::text('subcategory_id',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('manufacturer_id','manufacturer_id') !!}
            {!! Form::text('manufacturer_id',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('model_id','model_id') !!}
            {!! Form::text('model_id',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('condition_id','condition_id') !!}
            {!! Form::text('condition_id',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price','price') !!}
            {!! Form::text('price',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title','title') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description','description') !!}
            {!! Form::text('description',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE','action'=>['PostsController@destroy',$post->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Post',['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}


    </div>
    {{--<div class="container">--}}
        {{--<h2>Edit Post Page - {{$post->title}}</h2>--}}

        {{--<form method="post" a.ction="/posts/{{$post->id}}">--}}
        {{--{!! Form::open(['method'=>'POST','action'=>'PostsController@store']) !!}--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('title','Title') !!}--}}
            {{--{!! Form::text('title',null,['class'=>'form-control']) !!}--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--{!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}--}}
        {{--</div>--}}


        {{--<h3>category_id</h3>--}}
            {{--<input type="number " name="category_id" placeholder="category_id" value="{{$post->category_id}}">--}}
            {{--<h3>subcategory_id</h3>--}}
            {{--<input type="number" name="subcategory_id" placeholder="subcategory_id" value="{{$post->subcategory_id}}">--}}
            {{--<h3>manufacturer_id</h3>--}}
            {{--<input type="number" name="manufacturer_id" placeholder="manufacturer_id" value="{{$post->manufacturer_id}}">--}}
            {{--<h3>model_id</h3>--}}
            {{--<input type="number" name="model_id" placeholder="model_id" value="{{$post->model_id}}">--}}
            {{--<h3>condition_id</h3>--}}
            {{--<input type="number" name="condition_id" placeholder="condition_id" value="{{$post->condition_id}}">--}}
            {{--<h3>price</h3>--}}
            {{--<input type="number" name="price" placeholder="price" value="{{$post->price}}">--}}
            {{--<h3>title</h3>--}}
            {{--<input type="text" name="title" placeholder="title" value="{{$post->title}}">--}}
            {{--<h3>description</h3>--}}
            {{--<input type="text" name="description" placeholder="description" value="{{$post->description}}">--}}


            {{--<input type="submit" name="UPDATE">--}}

        {{--{!! Form::close() !!}--}}

        {{--<form method="post" action="/posts/{{$post->id}}">--}}
            {{--<input type="hidden" name="_method" value="DELETE">--}}
            {{--{{csrf_field()}}--}}

            {{--<input type="submit" value="DELETE">--}}
        {{--</form>--}}


    {{--</div>--}}
@endsection
