@extends('layout')

@section('content')
    <h1>Welcome to the libraries page!</h1>
    
    @foreach($libraries as $library)
        <li>{{ $library->library_name }}</li>
    @endforeach
@stop