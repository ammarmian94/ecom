@extends('master')
@section('content')
    <div class="container custom-product">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <a href="detail/{{ $item['id'] }}">
                            <img src="{{ $item['gallery'] }}" class="d-block w-100 slider-img" alt="...">
                            <div class="carousel-caption slider-text">
                                <h3>{{ $item['name'] }}</h3>
                                <p>{{ $item['description'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="trending-wrapper">
            <h1>Trending Products</h1>
            @foreach ($products as $item)
                <div class="trending-item">
                    <a href="detail/{{ $item['id'] }}">
                        <img class="trending-img" src="{{ $item['gallery'] }}" class="d-block w-100 slider-img" alt="...">
                        <div class="">
                            <h3>{{ $item['name'] }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
