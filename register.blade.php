

@extends('layouts.app')

@section('content')
    <h1>Register</h1>
    <form action="{{ route('register') }}" method="post">
        @csrf
     
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required>
        
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required>
        
  

        <button type="submit">Register</button>
    </form>
@endsection
