@extends('layouts.app')

@section('content')

<h2>Product List</h2>

<ul>
@forelse ($products as $product)

    <li>
        <strong>{{ $product['name'] }}</strong>

        @if($product['price'] > 1000)
            <span> - Premium Product</span>
        @endif

        <br>
        Description: {{ $product['description'] }} <br>
        Price: ${{ $product['price'] }}
    </li>

@empty

    <li>No products to display.</li>

@endforelse
</ul>

@endsection