@extends('layout')

@section('content')
    <h1>Welcome to the books page!</h1>
    
    @foreach($books as $book)
        <li>Title: {{ $book->book_title }} </li>
        <li>Author: {{ $book->book_author }} </li>
    @endforeach
@stop