@extends('layouts.main')

@section('title','Users')

@section('content')
<h1>List user</h1>
<div class="mt-4 d-flex justify-content-end">
    <a href="/users-banned" class="btn btn-secondary me-3">View Ban User</a>
    <a href="/users-registered" class="btn btn-primary me-3">View New Registered User</a>
</div>

@if(session('status'))
<div class="alert alert-success mt-3">
    {{session('status')}}
</div>
@endif

<div class="mt-4">
    <table class="table">
        <thead>
            <tr>
                <td>No.</td>
                <td>Username</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$value->username}}</td>
                <td>{{$value->phone}}</td>
                <td>{{$value->address}}</td>
                <td>
                    <a href="/users-detail/{{$value->slug}}" class="btn btn-secondary">Detail</a>
                    <a href="/users-ban/{{$value->slug}}" class="btn btn-danger">Ban User</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection