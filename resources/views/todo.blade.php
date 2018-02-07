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
        {{ $key->todo }} <a href="{{ route('todo.delete', ['id' => $key->id]) }}" class="btn btn-danger">Delete</a>
                         <a href="{{ route('todo.edit', ['id' => $key->id]) }}" class="btn btn-warning">Edit</a>
                         @if(!$key->completed)
                             <a href="{{ route('todo.completed', ['id' => $key->id]) }}" class="btn btn-sm btn-success">Mark as Completed</a>
                         @else
                            <span class="text-success">Completed</span>
                         @endif
        <hr>
    @endforeach
@stop


