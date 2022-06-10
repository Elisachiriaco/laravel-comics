@extends('layouts.card')
@section('cardContent')
<div class="jumbotron">
    <img src="../img/jumbotron.jpg" alt="">
    <div class="image-hover">
        <img src="{{$comic[0]['thumb']}}" alt="{{$comic[0]['series']}}">
    </div>
</div>
<div class="line"></div>
<div class="main-up">
    <div class="center">
    <h2>{{$comic[0]['title']}}</h2>
    <div class="green-line">
        <div class="col-sx">
        <p>U.S. Price: <span>{{$comic[0]['price']}}</span></p>
        <p>AVAILABLE</p>
        </div>
        <div class="col-dx">
            <p>Check Availability</p>
        </div>
    </div>
    </div>
    <p>{{$comic[0]['description']}}</p>
</div>
<div class="main-down">
    <div class="col-left">
        <h3>Talent</h3>
        <hr>
        <div class="list">
            <h6>Art by:</h6>
            <span>
                @foreach ($comic[0]['artists'] as $artist)
                    {{$artist}},
                @endforeach
            </span>
            <hr>
            <h6>Written by:</h6>
            <span>
                @foreach ($comic[0]['writers'] as $writer)
                    {{$writer}},
                @endforeach
            </span>
            <hr>
        </div>
    </div>
    <div class="col-right">
        <h3>Specs</h3>
        <hr>
        <h6>Series:</h6>
        <span>{{$comic[0]['series']}}</span>
        <hr>
        <h6>U.S. Price:</h6>
        <span>{{$comic[0]['price']}}</span>
        <h6>On sale date:</h6>
        <span>{{$comic[0]['sale_date']}}</span>
    </div>
</div>
@endsection