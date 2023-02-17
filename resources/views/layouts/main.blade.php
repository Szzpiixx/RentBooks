<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Rents Books @yield('title') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<style>
    .main {
        height: 100vh;
    }

    .sidebar {
        background-color: #F2DEBA;
    }

    .sidebar a{
        text-decoration: none;
        padding: 20px 20px;
        color:#B99B6B;
        display: block;
    }

    .sidebar a:hover{
        background-color: #F9CEEE;
    }

    .sidebar a.active{
        background-color: #F9CEEE;
        border-right: solid 4px #655D8A;
    }

    .books{
        background-color:#FD8A8A;
    }

    .card-data{
        border-radius:5px;
        padding: 20px 50px;
        border: solid 1px;
        color:#fff;
    }

    .card-data i{
        font-size: 50px;
    }

    .desc{
        font-size: 30px;
    }

    .count{
        font-size: 30px;
    }

    .category{
        background-color:#FD8A8A;
    }

    .users{
        background-color:#FD8A8A;
    }
</style>

<body>

    <div class="main d-flex flex-column justify-content-between">
        <!--navbar-->
        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container">
                <a class="navbar-brand" href="#">Rent-Book</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </div>
        </nav>

        <div class="body-main h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 p-2  collapse d-lg-block" 
                id="navbarSupportedContent">
                @if(Auth::user()->role_id == 1)
                    <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class='active' @endif>
                    <i class="bi bi-house-heart p-2"></i>Dashboard</a>
                    <a href="/users" @if(request()->route()->uri == 'users') class='active' @endif><i class="bi bi-person-heart p-2"></i>User</a>
                    <a href="/category" @if(request()->route()->uri == 'category') class='active' @endif><i class="bi bi-bookmark-heart p-2"></i>Category</a>
                    <a href="/books" @if(request()->route()->uri == 'books') class='active' @endif><i class="bi bi-book p-2"></i>Books</a>
                    <a href="/rents" @if(request()->route()->uri == 'rents') class='active' @endif><i class="bi bi-cart4 p-2"></i>Rents Logs</a>
                    <a href="/logout" @if(request()->route()->uri == 'logout') class='active' @endif><i class="bi bi-box-arrow-left p-2"></i>Logout</a>
                    @else
                    <a href="/profile" @if(request()->route()->uri == 'profile') class='active' @endif><i class="bi bi-person-heart p-2"></i>Profile</a> 
                    <a href="/logout" @if(request()->route()->uri == 'logout') class='active' @endif><i class="bi bi-box-arrow-left p-2"></i>Logout</a>    
                    @endif
                </div>
                <div class="content col-lg-9 p-5 ">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
