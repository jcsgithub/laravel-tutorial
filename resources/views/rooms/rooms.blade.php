@extends('layouts.master')

@section('content')

    <div class="title m-b-md">
        Rooms
    </div>

    @foreach($rooms as $room)
        <a href="/rooms/{{ $room->id }}"><h1>{{ $room->title }} ({{ $room->description }})</h1></a>
    @endforeach

@endsection