@extends('layouts.main')

@section('title','Users Banned')

@section('content')
<h1>List user Banned</h1>
<div class="mt-4 d-flex justify-content-end">
    <a href="/users" class="btn btn-primary me-3">Back</a>
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
            @foreach($usersBanned as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$value->username}}</td>
                <td>{{$value->phone}}</td>
                <td>{{$value->address}}</td>
                <td>
                    <a href="/users-restore/{{$value->slug}}" class="btn btn-secondary">Restore</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection