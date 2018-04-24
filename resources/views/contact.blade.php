@extends('layout.app')
@section('content')
<h1>contact</h1>
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name','', ['class'=>'form-control', 'placeholder'=> 'Enter a name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', '',['class'=>'form-control', 'placeholder'=> 'Enter E-mail'] )}}
    </div>
    <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '',['class'=>'form-control', 'placeholder'=> 'Enter a Message'])}}
    </div>
    <div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection

@section('sidebar')
@parent
<p>This is in contact but append to sidebar</p>
@endsection