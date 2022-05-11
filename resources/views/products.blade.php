@extends('master')
@section('content')
<div class="custom-product">
                <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="carousel-item {{$item['id']==1?'active':''}}">
                        <a href="detail/{{$item['id']}}">
                            <img class="slider-img" src="{{$item['gallery']}}" alt="Los Angeles" class="d-block" style="width:100%">
                            <div class="carousel-caption">
                            <h3>{{$item['name']}}</h3>
                            <p>{{$item['description']}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <div class="trending-wrapper">
            <h1>Trending Products</h1>
            <div class="">
                @foreach ($products as $item)
                    <div class="trending-items">
                        <a href="detail/{{$item['id']}}">
                        <img class="trending-img" src="{{$item['gallery']}}">
                        <div class="">
                        <h3>{{$item['name']}}</h3>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
</div>
@endsection
