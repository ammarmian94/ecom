@extends('master')
@section('content')
    <div class="container custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h1>My Orders</h1>
                @foreach ($orders as $item)
                    <div class="row cart-list-divider">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class="trending-img" src="{{ $item->gallery }}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h2>Name: {{ $item->name }}</h2>
                                <h5>Delivery Status: {{ $item->status }}</h5>
                                <h5>Address: {{ $item->address }}</h5>
                                <h5>Paymet Status{{ $item->paymet_status }}</h5>
                                <h5>Payment Method{{ $item->payment_method }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
