<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>UTS PRAKTEK</title>
</head>
<body>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="website.jpg" class="d-block w-100" alt="..." height="500px">
    </div>
    <div class="carousel-item">
      <img src="website2.jpg" class="d-block w-100" alt="..." height="500px">
    </div>
    <div class="carousel-item">
      <img src="website3.jpg" class="d-block w-100" alt="..." height="500px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<div class="container-fluid">
    WELCOME, WORLD!
</div>



<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    An active item
    <span class="badge badge-primary badge-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    A second item
    <span class="badge badge-primary badge-pill">5</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    A third item
    <span class="badge badge-primary badge-pill">4</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    A fourth item
    <span class="badge badge-primary badge-pill">1</span>
  </li>
</ul>



<div class="card">
  <div class="card-header">
    Quote
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
        <p>In mathematics and computer science, an algorithm is a step by step procedure for calculations. Algorithms are used for automatic calculation, data processing and reasoning. An algorithm is an effective method expressed as a finite series of well defined instructions to compute a function. Starting with an initial condition and an initial (possibly empty) input, the instructions describe a computation which, when executed, is processed through a finite number of well defined sequences of conditions, ultimately producing an "output" and stops at the final state. The transition from one state to the next is not necessarily deterministic; some algorithms, known as randomization algorithms, use random input. Although al-Khwarizmi's algorithm is referred to as rules for performing arithmetic using Hindu-Arabic numbers and systematic solutions and quadratic equations, some of the formalizations that later became modern algorithms began with an attempt to solve the decision problem (Entscheidungsproblem) proposed by David Hilbert in 1928. Further formalization is seen as an attempt to determine the "effective calculation" or the "effective method"; The formalization included the Godel-Herbrand-Kleene recursive function Kurt Godel - Jacques Herbrand - Stephen Cole Kleene in 1930, 1934 and 1935, Alonzo Church's lambda calculus in 1936, Emil's "Formula 1" Post in 1936, and Alan Turing's Turing Machine in 1936-7 and 1939. From the formal definition of the algorithm above, regarding intuitive concepts, there are still challenging problems.</p>
        <footer class="blockquote-footer">Someone famous in<cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>

</body>
</html>