@extends('layout.parent')

@section('tittle', 'OurBeer')

    <div id='map' style='width: 400px; height: 300px;'></div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYmFzYXRvcjAwIiwiYSI6ImNrbGtueXNmaDBnb3Qyd3AyaDVndHBhbTYifQ.8QQ15tpipTT07pjLjkVaww';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11'
        });
    </script>

@section('contents')
