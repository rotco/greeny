@extends('layouts.app')

@section('body')
    <div class="container">
        <h2>Create page</h2>

            <form method="post" action="/posts">

                <input type="number" name="user_id" placeholder="user_id">
                {{csrf_field()}}
                <input type="number" name="category_id" placeholder="category_id">
                <input type="number" name="subcategory_id" placeholder="subcategory_id">
                <input type="number" name="manufacturer_id" placeholder="manufacturer_id">
                <input type="number" name="model_id" placeholder="model_id">
                <input type="number" name="condition_id" placeholder="condition_id">
                <input type="number" name="price" placeholder="price">
                <input type="number" name="condition_id" placeholder="condition_id">
                <input type="text" name="title" placeholder="title">
                <input type="text" name="description" placeholder="description">


                <input type="submit" name="submit">

            </form>


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