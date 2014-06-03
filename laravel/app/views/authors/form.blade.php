@extends('layouts.master')

@section('content')

{{ Form::open(array('url'=>'insert')) }}
{{ Form::text('fname','',array('placeholder'=>'First Name')) }}
{{ Form::text('lname','',array('placeholder'=>'Last Name')) }}
{{ Form::submit('Add Name') }}
{{ Form::close() }}
<div>
    @if($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
    @endif
</div>
@stop