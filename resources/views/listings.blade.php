<h1>{{ $heading }}</h1>


@if (count($listings) == 0)
    <p>No Listing Found</p>
@endif

@foreach ($listings as $item)
    <h2>{{ $item['title'] }}</h2>
    <p> {{ $item['description'] }}</p>
@endforeach