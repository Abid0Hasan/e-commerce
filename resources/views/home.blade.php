@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($products as $product)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ asset('uploads/product/'.$product->image) }}" style="height: 250px; width: 250px" alt="">
                    <div class="caption">
                        <h4>{{ $product->name }}</h4>
                        <p>{{ $product->description }}</p>
                        <p><strong>Price: </strong> {{ $product->price }}$</p>
                        <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
</div>
@endsection
