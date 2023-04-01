@extends('layout')

@section('content')
    

<h1>{{ $heading }}</h1>


@if (count($listings) == 0)
    <p>No Listing Found</p>
@endif

@foreach ($listings as $item)
    <h2>
        <a href="http://localhost/laragigs/public/listings/{{$item['id']}}">
        {{ $item['title'] }}
        </a>
    </h2>
    <p> {{ $item['description'] }}</p>
@endforeach

@endsection