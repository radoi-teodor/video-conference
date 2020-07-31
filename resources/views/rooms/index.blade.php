@extends('layouts.room-page-layout')

@section('title', 'Video Chat Rooms')

@section('content')
    <div class="title m-b-md">
        @yield('title')
    </div>

    <form action="{{ url('room/create') }}" method="post">
      @csrf
      <label for="roomName">Create or Join a Video Chat Room</label>
      <input id="roomName" type="text" name="roomName" value="">
      <input type="submit" name="submit" value="Go">
    </form>

    @if($rooms)
    @foreach ($rooms as $room)
        <a href="{{ url('/room/join/'.$room) }}">{{ $room }}</a>
    @endforeach
    @endif
@endsection
