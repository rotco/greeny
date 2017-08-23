@extends('layouts.app')

@section('body')
    <div class="container">
        <h2>Create page</h2>
        {!! Form::open(['method'=>'POST','action'=>'PostsController@store']) !!}
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


    </div>
@endsection

{{--$table->increments('id');--}}
{{--$table->integer('user_id');--}}
{{--$table->integer('category_id');--}}
{{--$table->integer('subcategory_id');--}}
{{--$table->integer('manufacturer_id');--}}
{{--$table->integer('model_id');--}}
{{--$table->integer('condition_id');--}}
{{--$table->integer('price');--}}
{{--$table->string('title');--}}
{{--$table->text('description');--}}
{{--$table->boolean('status')->default(false);--}}