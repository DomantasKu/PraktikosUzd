@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Details</h1>
        <div class="card">
            <div class="card-header">
                {{ $user->name }}
            </div>
            <div class="card-body">
                <p>Email: {{ $user->email }}</p>
            </div>
        </div>
        <a href="{{ route('users.index') }}" class="btn btn-primary">Back to Users</a>
    </div>
@endsection
