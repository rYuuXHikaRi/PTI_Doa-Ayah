<!-- resources/views/auth/change-password.blade.php -->

@extends('layouts.app')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @elseif (session('successdelete'))
    <div class="alert alert-success">
        {{ session('successdelete') }}
    </div>
    @elseif (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

<form method="POST" action="{{ route('profile.changePassword', auth()->user()->id) }}">
    @csrf
    <label for="current_password">Password Lama:</label>
    <input type="password" name="current_password" required>

    <label for="new_password">Password Baru:</label>
    <input type="password" name="new_password" required>

    <label for="new_password_confirmation">Konfirmasi Password Baru:</label>
    <input type="password" name="new_password_confirmation" required>

    <button type="submit">Ganti Password</button>
</form>
@endsection
