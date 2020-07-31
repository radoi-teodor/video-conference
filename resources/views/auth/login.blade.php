@extends('layouts.base-layout')

@section('title', 'Login')

@section('content')
  <form action="{{ url('/login-post') }}" method="post">
    @csrf
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" placeholder="Your E-mail" value="" required>

    <br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" placeholder="Your Password" value="" required>

    <br>

    <input type="submit" name="login" value="Login">

  </form>
  <a href="{{ url('/register') }}">Register</a>
@endsection
