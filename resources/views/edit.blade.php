<?php
/**
 * Created by PhpStorm.
 * User: hikmetis
 * Date: 2/6/18
 * Time: 4:01 AM
 */
?>
@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('todo.save', ['id' => $todo ->id]) }}" method="post">
                {{ csrf_field() }}
                <input type="text" name="todo" value="{{ $todo->todo }}" class="form-control input-lg" placeholder="Write another todo">
            </form>
        </div>
    </div>
    <hr>
@stop



