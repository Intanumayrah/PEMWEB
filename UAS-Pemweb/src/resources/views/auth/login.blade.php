@extends('layouts.app')

@section('title', 'Login Admin')

@section('content')
    <div class="container mt-5">
        <h2>Login Admin</h2>
        <form method="POST" action="#">
            @csrf
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
@endsection
