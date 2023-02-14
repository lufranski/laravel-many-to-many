@extends('layouts.main-layout')

@section('content')
    
    <h1>CONTENT GOES HERE</h1>

    <h1>List o' products:</h1>

    <ul>

    </ul>
    @foreach ($products as $product)

        <li>
            [#{{ $product -> code }}] - 
            {{ $product -> name }} - 
            {{ $product -> price }} $ - 
            {{ $product -> weight }} kg
        </li>
    @endforeach

@endsection