@extends('layouts.base-layout')

@section('title', 'Register')

@section('content')
  <form action="{{ url('/register-post') }}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" placeholder="Your name" value="" required>

    <br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" placeholder="Your E-mail" value="" required>

    <br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" placeholder="Your Password" value="" required>

    <br>

    <input type="submit" name="register" value="Register">

  </form>
  <a href="{{ url('/login') }}">Login</a>
@endsection
