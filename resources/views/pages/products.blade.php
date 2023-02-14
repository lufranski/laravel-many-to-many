@extends('layouts.main-layout')

@section('content')
    
    <h1>List o' products:</h1>

    <a href="{{ route('create')}}">
        Create new product
    </a>

    <a href="{{ route('home')}}" class="ms-2">
        Oh heck, go back!
    </a>

    <div class="wrapper vertical">

        <ul>
    
            @foreach ($products as $product)
        
                <li>
                    [#{{ $product -> code }}] - 
                    {{ $product -> name }} - 
                    {{ $product -> price }} $ - 
                    {{ $product -> weight }} kg
                </li>
            @endforeach
        </ul>
    </div>


@endsection