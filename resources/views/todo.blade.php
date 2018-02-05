@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input type="text" name="todo" class="form-control input-lg" placeholder="Create new todo">
            </form>
        </div>
    </div>
    <hr>
    @foreach($todos as $key)
        {{ $key->todo }}
        <hr>
    @endforeach
@stop


