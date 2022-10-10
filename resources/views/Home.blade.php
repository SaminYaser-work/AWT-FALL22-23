@extends('layouts.app')
@section('header')
Home 🏠
@endsection

@section('content')
    <h3>My name is {{$name}}</h3>
    <h3>I am {{$age}} years old</h3>
    <h3>My pic:</h3>
    <img src="{{$imageLink}}" alt="epic handsome man" width="300px">
    <h2>Like comment and subscribe!!!!</h2>
@endsection
