

@extends('layouts.app')

@section('content')
    <h1>Welcome to Home Page</h1>
    <p>This is the home page content.</p>
    <a href="{{ route('register') }}">Go to Register</a>
@endsection
