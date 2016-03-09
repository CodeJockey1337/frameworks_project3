@extends('layout')


@section('container')
    <div class="content">
        <div class="title">Database Page</div>
    </div>
    <br />
        @unless (empty($people))
            Database is populated:
        @else
            There are no people
        @endunless
        
        @foreach ($people as $person)
         <li> {{ $person }}</li>
        @endforeach
@stop