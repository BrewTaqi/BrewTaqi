<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <title>Belanje Lada</title>
  </head>

  {{-- Navbar --}}
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Belanje Lada</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="nav navbar-nav">
            <li class="nav-item active ">
              <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Contact</a>
            </li>    
          </ul>
        </div>
    </div>
</nav>
{{-- Navbar end --}}

{{-- Corousel --}}
<section class="home" id="homer">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="gambar/pepper1.jpg" class="d-block w-100" alt="...">
      <div class="card-img-overlay d-none d-md-block text-center ">
        <h1 class="display-3">Bangka White Pepper</h1>
        <div class="text" id="text">
        <h3>Authentic Muntok White Papper to Worldwide</h3>
      </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="gambar/pepper2.jpg" class="d-block w-100" alt="...">
      <div class="card-img-overlay d-none d-md-block">
        <h1>We supplied the authentic Muntok white pepper from Bangka Belitung - Indonesians with the highest quality from around the world</h1>
        <div class="text1" id="text1">
        <h3 class="display-5">And we committed to the authenticity and flavor of spices of the finest quality</h3>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <img src="gambar/pepper1.jpg" class="d-block w-100 height-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</section>
{{-- Corousel end --}}

{{-- Featur --}}
<section class="featur" id="feature">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <img src="gambar/comitmen.png" alt="" class="card-img-top">
        <h5 class="card-title text-center">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    
      <div class="col-sm-3">
        <img src="gambar/love.png" alt="" class="card-img-top">
        <h5 class="card-title text-center">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
     </div>
      <div class="col-sm-3">
        <img src="gambar/inovaton.png" alt="" class="card-img-top">
        <h5 class="card-title text-center">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    
      <div class="col-sm-3">
        <img src="gambar/quality.png" alt="" class="card-img-top">
        <h5 class="card-title text-center">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</section>

{{-- Featur end --}}


{{-- About --}}
<section class="about" id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>About Us</h2>
        <hr>
      </div>
    </div>
  
  <div class="row">
    <div class="col-sm-6">
      <h5>We process more than 1,500 hectares of coconut plantations, spread across several islands in Eastern Indonesia.</h5>
      <p>In the beginning, our company was engaged in manufacturing where we processed coconut derivative products, 
        namely coconut shells into coconut shell charcoal.And after that our company expanded and expanded into coconut plantations, 
        to process more derivative products</p>
    </div>
    <div class="col-sm-6 text-center">
      <img src="gambar/{{ $img; }}" alt="">
    </div>
  </div>
</div>
</section>
{{-- About End --}}

{{-- Product --}}
<section class="product" id="product">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Product</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-5">
        <h3>White Pepper</h3>
        <p>Coconut fiber, is a natural fiber extracted from the husk of coconut[1] and used in products such as floor mats, doormats, brushes and mattresses. Coir is the fibrous material found between the hard, internal shell and the outer coat of a coconut. Other uses of brown coir (made from ripe coconut) are in upholstery padding, sacking and horticulture. White coir, harvested from unripe coconuts, is used for making finer brushes, string, rope and fishing net</p>
        <button type="button" class="btn btn-outline-secondary">Contact Us <img src=""></button>
      </div>
      <div class="col-sm-7 text-center">
        <img src="gambar/pepper1.jpg" alt="">
      </div>
    </div>
  </div>
</section>
{{-- Product End --}}

{{-- Team --}}
<section class="team" id="team">
  <div class="container">
     <div class="row">
       <div class="col-sm-12 text-end">
         <h1>Our Team</h1>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-3 text-center">
         <img src="gambar/inul.png" alt="" class="card-img-top">
         <h4>Inul</h4>
         <h5>Founder</h5>
         <p>Our faith is the substance of our future. There is no big success without big sacrifice.</p>
       </div>
       <div class="col-sm-3 text-center">
        <img src="gambar/pep.png" alt="" class="card-img-top">
        <h4>Pep</h4>
        <h5>Co-Founder</h5>
        <p>Our faith is the substance of our future. There is no big success without big sacrifice.</p>
      </div>
      <div class="col-sm-3 text-center" >
        <img src="gambar/lanza.png" alt="" class="card-img-top">
        <h4>Lanza</h4>
        <h5>Marketing</h5>
        <p>Our faith is the substance of our future. There is no big success without big sacrifice.</p>
      </div>
      <div class="col-sm-3 text-center">
        <img src="gambar/brew.png" alt="" class="card-img-top">
        <h4>BrewTaqi</h4>
        <h5>Development</h5>
        <p>Our faith is the substance of our future. There is no big success without big sacrifice.</p>
      </div>
     </div>
  </div>
</section>
{{-- Team And --}}

{{-- Footer --}}
<section class="footer" id="footer">
  <div class="container">
    <div class="raw">
      <div class="col-sm-12">
        <h1></h1>
      </div>
    </div>
  </div>
</section>
{{-- Footer End --}}

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="js/scritp.js"></script>
</body>
</html>