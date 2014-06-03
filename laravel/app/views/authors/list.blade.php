@extends('layouts.master')

@section('content')

<h1>All Users</h1>

<p>{{ HTML::link('form','Add a new User') }}</p>

@if(isset($users))
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $u)
        <tr>
            <td>{{ $u->fname }}</td>
            <td>{{ $u->lname }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
    There are no users
@endif

@stop