@extends('leyout/app')
@section('title', 'home')

@section('content')
<div class="my-3">
    <h2>products</h2>
    <div class="row my-3">
        @foreach ($products as $product)
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <img src="{{$product['thumb']}}" alt="img product">
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection