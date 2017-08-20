@extends('layouts.app')

@section('body')
    <div class="container">
        <h2>Create page</h2>
        <form action="">
            <input type="text" name="title" placeholder="Title">
            <input type="email" name="email" placeholder="Email">
            <button name="submit">Submit</button>
        </form>
    </div>
@endsection