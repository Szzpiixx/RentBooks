@extends('layouts.main')

@section('title','Edit Books')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<h1>Ini Halaman Edit Books</h1>

<form action="" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="book_code" class="form-label">Book Code</label>
    <input type="text" name="book_code" id="book_code" class="form-control w-50" placeholder="Book Code" value="{{$books->book_code}}">
    <label for="title" class="form-label" >Title</label>
    <input type="text" name="title" id="title" placeholder="Title" class="form-control w-50" value="{{$books->title}}">
    <label for="image" class="form-label" >Cover</label>
    <input type="file" name="image" id="image" class="form-control w-50">
<div class="mb-3">
     <label for="currentCover" class="form-label d-block">Current Cover</label>
        @if($books->cover != '')
        <img src="{{asset('storage/cover/'.$books->cover)}}" 
        alt="" width="200px"></td>
        @else
        <img src="{{asset('img/not-found.jpg')}}" alt="" width="200px">
        @endif
</div>
    <label for="categories[]" class="form-label w-50 mt-2">Category</label>
    <select class="form-control w-50 select" name="categories[]" id="categories" multiple="multiple">
        @foreach($categories as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
    <div class="mb-3">
     <label for="listcategory" class="form-label">Current Category</label>
     <ul>
        @foreach($books->categories as $category)
        <li>{{$category->name}}</li>
        @endforeach
     </ul>
    </div>
   
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
        $('.select').select2();
        });
    </script>
@endsection