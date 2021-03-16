@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <h1>{{ $product->product_title }}</h1>
            <img src="/img/{{ $product->product_image }}" alt="" width="300" height="200">
        </div>
    </div>
@endsection