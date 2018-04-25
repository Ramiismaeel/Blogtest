
@extends('layout.app')
@section('content')
<h1>Messages</h1>
@if(count($messages)>0)
    @foreach($messages as $message)
        <ul class='list-group'>
            <li class='list-group-item'><strong>Name: </strong>{{ $message->name }}</li>
            <li class='list-group-item'><strong>E-mail: </strong> {{ $message->email }}</li>
            <li class='list-group-item'><strong>Message: </strong> {{ $message->message }}</li>
        </ul>
        
        <hr>
    
    @endforeach

@endif
@endsection

@section('sidebar')
@parent
<p>This is appended to sidebar</p>
@endsection