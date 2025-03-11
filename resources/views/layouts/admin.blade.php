@extends('layouts.app')

@section('sidebar')
    <ul>
        <li>Admin Dashboard</li>
        <li>Manage Users</li>
        <li>Settings</li>
    </ul>
@endsection

@section('content')
    <div class="admin-content">
        @yield('admin-content')
    </div>
@endsection
