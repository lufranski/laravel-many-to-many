@extends('layouts.main-layout')

@section('content')
    
    <h1>List o' products, ordered for Category:</h1>

    <a href="{{ route('create')}}">
        Create new product
    </a>

    <a href="{{ route('products')}}" class="ms-2">
        Filter by product
    </a>

    <div class="wrapper d-flex">

        @foreach ($categories as $category)
    
            <div class="ms_card">
    
                <h2>{{ $category -> name }} - code #{{ $category -> code }}</h2>
                <ul>
        
                    @foreach ($category -> products as $product)
                        
                        <li>
                            [#{{ $product -> code }}]
                            {{ $product -> name }} - 
                            {{ $product -> typology -> name }} -
                            DIGITAL: {{ $product -> typology -> digital ? 'Yes' : 'No' }}
                        </li>
                    @endforeach
                </ul>
            </div>
            
    
        @endforeach
    </div>


@endsection