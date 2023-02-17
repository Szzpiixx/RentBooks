<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Rent Book</title>
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-lg bg-secondary">
  <div class="container">
    <a class="navbar-brand" href="#">Rent Book </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Romance</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Fiction</a></li>
            <li><a class="dropdown-item" href="#">Comedy</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="content" style="height: 200px">
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="max-height: 400px">
    <div class="carousel-item active">
      <img src="https://i.pinimg.com/564x/73/d3/eb/73d3eb6181f834ba7b0879067b32ec19.jpg" class="d-block w-100" alt="..." style="height:400px">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/564x/16/00/57/160057bf350fcb748417f85b6fe34202.jpg" class="d-block w-100" alt="..." style="height:400px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/564x/6a/5e/77/6a5e77596c30d3d1d7db0f53a15be4f5.jpg" class="d-block w-100" alt="..." style="height:400px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <div class="container my-5">
    <div class="row">
        <div class="col-lg-4">
            <h3>Hallo!</h3>
            <a href="#" type="button" class="btn btn-outline-danger
            btn-sm mt-2">SignUp Now!!</a>
        </div>
        <div class="col-lg-8">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam sequi odit inventore perspiciatis vitae facilis, sunt nesciunt aperiam fuga quisquam accusantium atque iusto laboriosam numquam ut, iste consequatur. 
               Rerum sunt obcaecati voluptatibus natus ullam, enim alias facilis magnam eaque dolorem a laborum labore, incidunt ab earum? Aspernatur blanditiis debitis deleniti maiores accusantium optio veniam cumque ullam recusandae, 
               natus aperiam assumenda ipsa porro similique ad incidunt, non voluptate, adipisci nisi. Recusandae consequatur reprehenderit saepe fuga. Sunt optio placeat asperiores deleniti quod repellat, odit excepturi! Sunt, maiores voluptate? Debitis, 
               .</p>
        </div>
    </div>

    <!--Cards Book-->
    <div class="container my-5">
        <div class="row text-center">
            <h2>Most Popular Book</h2>
        </div>
        <div class="row my-5">
            <div class="col-lg-4 my-4">
            <div class="card" style="width: 18rem;">
  <img src="https://marketplace.canva.com/EAFFC7J8mbI/1/0/1003w/canva-putih-kuning-lanskap-minimalis-sampul-buku-novel-qBdCH1piX8E.jpg" class="card-img-top" alt="..." style="max-height: 400px">
  <div class="card-body">
    <h5 class="card-title"> Life With Simplicity </h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
            <div class="col-lg-4 my-4">
            <div class="card" style="width: 18rem;">
  <img src="https://upload.wikimedia.org/wikipedia/id/b/bf/Harry_Potter_and_the_Sorcerer%27s_Stone.jpg" class="card-img-top" alt="..." style="max-height: 400px">
  <div class="card-body">
    <h5 class="card-title">Harry Potter</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
            <div class="col-lg-4 my-4">
            <div class="card" style="width: 18rem;">
  <img src="https://covers.openlibrary.org/b/id/8243184-L.jpg" class="card-img-top" alt="..." style="max-height: 400px">
  <div class="card-body">
    <h5 class="card-title">Renoir - Hyperion</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
        </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--Contact-->
<div class="container">
    <div class="row text-center">
        <h2>Contact Me</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-7">
        <form>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="id">
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Message</label>
    <textarea class="form-control" id="message"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>
<!--Footer-->
<footer class="bg-secondary text-white text-center mt-5" 
style="height: 50px">
    <p>Create By <a href="#" class="text-white fw-bold "
    style="text-decoration:none" target="_blank">Silvia Indah Safitri </a></p>
</footer>
</div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    
</body>



</html>