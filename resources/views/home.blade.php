
@extends('layout.app')
@section('content')
<h1>Home</h1>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, fugiat? Illum maiores labore quo tempora! Ea doloribus assumenda nemo tempora iure labore, eum tempore non ad modi nulla! Sint, delectus!</p>
@endsection

@section('sidebar')
@parent
<p>This is appended to sidebar</p>
@endsection