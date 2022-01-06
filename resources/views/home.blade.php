<!doctype html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css">
    <title>Muntok White Pepper</title>
  </head>

  {{-- Navbar --}}
<body onload="hide_loading();">
  
  {{-- Loading --}}
  <div class="loading overlay text-center">
  <div class="loadingio-spinner-dual-ball-v5gnduskd6"><div class="ldio-e49il0u02oj">
    <div></div><div></div><div></div>
    </div></div>
  </div>
  {{-- Loading End --}}
<nav class="navbar navbar-expand-lg fixed-top col-md-12">
    <div class="container">
        <a class="navbar-brand page-scroll text-center" href="{{ url ('/#home') }}" ><img src="gambar/brand.png" alt="Logo Muntok White Pepper"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle-navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active page-scroll"  href="{{ url ('/#about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active page-scroll" href="{{ url ('/#product') }}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active page-scroll" href="{{ url ('/#team') }}">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active page-scroll" href={{ url ('/#contact') }}>Contact</a>

            </li>    
          </ul>
        </div>
    </div>
</nav>
{{-- Navbar end --}}

{{-- Corousel --}}
<section class="home" id="home">
  <div id="carouselExampleDark" class="carousel carousel-dark slide"  data-bs-ride="carousel" >
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  <div class="row">
    <div class="container">
        <div class="gambar">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="gambar/Lada1.jpg" class="col-block" alt="Muntok White Pepper">
          <div class="card-img-overlay col-none col-md-block-12 text-center ">
            <div class="text0">
            <h1 class="display-3">Bangka White Pepper</h1>
            </div>
            <div class="text">
            <h3>Authentic Muntok White Papper to Worldwide</h3>
          </div>
          </div>
        </div>
            <div class="carousel-item">
              <img src="gambar/lada25.jpg" class="col-block" alt="Muntok White Pepper">
              <div class="card-img-overlay col-none col-md-block-12">
                  <div class="text1">
                      <h4 class="display-5">We Supplied the Authentic Muntok White Pepper</h4>
                      <h4>From Bangka Belitung, Indonesians with the highest quality from around the world.</h4>
                  </div>
              </div>
            </div>
              <div class="carousel-item">
                <img src="gambar/lada13.jpg" class="col-block" alt="Muntok White Pepper">
                  <div class="card-img-overlay col-none col-md-block-12">
                    <div class="text2">
                    <ul class="text-end">
                      <h1 class="display-5">We Committed to the Authenticity</h3>
                      <h4>and flavor of spices of the finest quality.</h4>
                    </ul>
                  </div>
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
  </div>
  </div>
  </div>

  <div class="why">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-5">Why Us ?</h1>
          <h5> Muntok White pepper has a high-quality spice taste because it 
            has high piperine (spiciness level) (5-7%) and a sharp aroma 
            of essential oils.</h5>
          <p>Traditional processing is using the soaking method to remove 
            the skin of the pepper, dry in the sun, and do several parameters 
            of feasibility testing before being processed. We have quality growers 
            and white pepper.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="featur">
    <div class="container">

        <div class="card">
        <div class="imgBx" data-text="Commitment">
          <img src="gambar/comitmen.png" alt="Commitment">
          </div>
            <div class="content">
              <div>
              <h3>Commitment</h3>
              <p>Commitment is important where we will continue to provide the 
              best to our customers and investors all the time. Our opportunity to serve should 
              be viewed as a privilege that is not to be taken for granted.</p>
            </div>
          </div>
        </div>
    
          <div class="card">
          <div class="imgBx" data-text="Integrity">
            <img src="gambar/love.png" alt="Intergrity">
            </div>
              <div class="content">
                <div>
                <h3>Integrity</h3>
                <p>Integrity means telling the truth, keeping our word and 
                treating others with fairness and respect. Integrity is one of our most 
                cherished assets. It must not be compromised..</p>
              </div>  
            </div>          
          </div>
          
          <div class="card">
            <div class="imgBx" data-text="Inovation">
              <img src="gambar/inovaton.png" alt="Inovation">
              </div>              
                <div class="content">
                  <div>
                  <h3>Inovation</h3>
                  <p>Innovation means inventing, designing, developing 
                  products and services that have high appeal in the marketplace and 
                  strengthen customer preference for the Universal Coco Indonesia 
                  project.</p>
                </div> 
              </div>           
            </div>
          
            <div class="card">
              <div class="imgBx" data-text="Quality">                
                <img src="gambar/quality.png" alt="Inovation">                              
                </div>              
                  <div class="content">
                    <div>
                    <h3>Quality</h3>
                    <p>Quality is exhibited in many ways by selling and 
                    supporting products and services that delight customers, establishing a work environment, 
                    delivering financial results that meet investor expectations.</p>
                  </div>  
                </div>              
              </div>
            
    
    </div>
  </div>

</section>
{{-- Corousel end --}}

{{-- About --}}
<section class="about" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="display-5">About Us</h1>
      </div>
    </div>
  
  <div class="row">
    <div class="col-md-6">
      <div class="box">
      <p class="fs-5">We are an exporter of white pepper with the best premium quality in the 
        world.With a distinctive taste of white pepper Muntok and a high level of 
        spiciness above, average more than thousands of muntok white pepper farmers 
        produce high quality, white pepper and are processed traditionally such as 
        seed selection and treatment, peeling and drying systems to produce a 
        distinctive taste of native Indonesian spices.</p>
    </div>
  </div>

    <div class="col-md-5 text-center">
      <div class="box1">
      <img src="gambar/phonlada1.png" alt="Muntok White Pepper">
    </div>
    </div>
  </div>
  </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#243e21" fill-opacity="1" d="M0,32L48,64C96,96,192,160,288,170.7C384,181,480,139,576,117.3C672,96,768,96,864,101.3C960,107,1056,117,1152,106.7C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
</path></svg>
{{-- About End --}}

{{-- Product --}}
<section class="product" id="product">
    <div class="row">
      <div class="container">
      <div class="col-md-12">
        <h1 class="display-3">Product</h1>
      </div>
      </div>
    </div>

    <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="display-1">White Pepper</h3> 
        <p class="fs-5.5">White pepper is a spice with a spicy taste and a white color. 
          White pepper is usually used as a spice in the kitchen to give a 
          sensational yet warm taste to dishes. This Muntok white pepper 
          contains the highest levels of piperine in the world and has 
          benefits for the health of the body including breathing, 
          preventing stomach disorders, preventing damage to body cells, helping to prevent, and others.
          The products we provide will be packed using 50 kg plastic sacks or 
          according to the buyer's request.</p>
          <div class="col-md-5 text-center">
            <a type="button" href="https://wa.me/6287743145956" class="btn btn-outline-secondary">
              Contact Us <i class="bi bi-whatsapp" style="color: green"></i></a>
          </div>
      </div>
      <div class="col-md-6 text-center">
        <img src="gambar/produk.png" alt="Muntok White Pepper">
      </div>
    </div>
    </div>
</section>
{{-- Product End --}}

{{-- Team --}}
<section  class="team" id="team">
  <div class="container">
     <div class="row">
       <div class="col-md-12 text-end">
         <h1 class="display-5">Our Team</h1>
       </div>
     </div>
  </div>

  <div class="swiper team-slide">
    <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="card">
          <div class="imgBx">
            <img src="gambar/mhf.jpg" alt="Maulidil H. Fajriansyah">
          </div>
          <div class="layer">
                <div class="content">
                  <p>Learn from experience, start for today and look 
                    forward to tomorrow. There is no success without failure 
                    and hope for the possibilities.</p>
                </div>
          </div>   
        </div>
        <div class="details text-center">
          <h4>Maulidil H. Fajriansyah<br><span>Founder</span></h4>
          <a href="https://www.instagram.com/maulidilhf/"><i style="font-size: 1.25rem;" class="bi bi-instagram"></i></a>
        </div>
      </div>
      
      <div class="swiper-slide">
        <div class="card">
          <div class="imgBx">
            <img src="gambar/pep4.jpg" alt="Febriansyah Saputra">
          </div>
          <div class="layer">
            <div class="content">
              <p>Take risks, if you win you'll be happy, if you lose, you'll be wiser.</p>
            </div>
          </div>
        </div>
        <div class="details text-center">
          <h4>Febriansyah Saputra<br><span> Co Founder</span></h4>
          <a href="https://www.instagram.com/febrian_pepep/"><i style="font-size: 1.25rem;" class="bi bi-instagram"></i></a>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="card">
          <div class="imgBx">
            <img src="gambar/gudin.jpg" alt="Muhammad Lanza. P">
          </div>
          <div class="layer">
            <div class="content">
              <p>Try to get something you want to get until you do.</p>
            </div>
          </div>
        </div>
        <div class="details text-center">
          <h4>Muhammad Lanza. P<br><span>Marketing</span></h4>
          <a href="https://www.instagram.com/muhammad_lanza/"><i style="font-size: 1.25rem;" class="bi bi-instagram"></i></a>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="card">
          <div class="imgBx">
            <img src="gambar/brew.jpg" alt="Brew Taqi">
          </div>
          <div class="layer">
            <div class="content">
              <p>Thinking you can be successful is the first step,
                 the next step is moving towards success.</p>
            </div>
          </div>
        </div>
        <div class="details text-center">
          <h4>Brew Taqi<br><span>Developer</span></h4>
          <a href="https://www.instagram.com/abdullahtaqi765/"><i style="font-size: 1.25rem;" class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>
    </div>
  </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#243e21" fill-opacity="1" d="M0,96L48,106.7C96,117,192,139,288,170.7C384,203,480,245,576,240C672,235,768,181,864,144C960,107,1056,85,1152,69.3C1248,53,1344,43,1392,37.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path></svg>

  
{{-- Team And --}}

{{-- Contact --}}
<section class="contact" id="contact">
  <div class="container-fluid">
  <div class="row">
    <div class="latar">
    <div class="col-md-12 text-center">
      <h1 class="display-5">Contact</h1>
    </div>
    </div>
  </div>
  
      <div class="row">
      <div class="col-md-3">
        <div class="text3">
          <img src="gambar/brand.png" alt="Logo Muntok White Pepper">
          <p class="fs-5">If you have any questions about our products, please feel free 
            to contact us via Whatsapp, Email or Instagram and of course, we will 
            provide the best service.</p><br>
        </div>
        <br>
        <div class="icon">
          <a href="https://www.instagram.com/muntokwhitepepper21/" style="color:#346d28"><i  style="font-size: 1.5rem;" class="bi bi-instagram"></i></a>&ensp;
          <a href="" style="color: #346d28"><i style="font-size: 1.5rem;" class="bi bi-envelope" ></i></a>&ensp;
          <a href="https://wa.me/6287743145956" style="color: #346d28"><i  style="font-size: 1.5rem;" class="bi bi-whatsapp"></i></a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="text4">
          <i class="bi bi-geo-alt-fill"></i>
          <p class="fs-4">Office :</p>
          <p class="fs-5">Jl. RE. Martadinata No.104, Rejosari, Pangkal Balam, Kota Pangkal Pinang, Kepulauan Bangka Belitung 33684</p>
          <i class="bi bi-telephone"></i><p class="fs-5">Mobile : +62 877 4314 5956</p>
          <i class="bi bi-envelope" ></i><p class="fs-5">Email : muntokwhitepepper21@gmail.com</p>
        </div>
      </div>
      
      
      <div class="col-md-6">
        <div class="googleMap" id="googleMap">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7974.209624403457!2d106.11629211795054!3d-2.113251819770401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e22c1923e5b01ff%3A0xfa3936094e012c0!2sMuntok%20White%20Pepper!5e0!3m2!1sen!2sid!4v1639922105563!5m2!1sen!2sid"></iframe>
          </div>
      </div>
    </div>

</div>
</section>
        
{{-- Footer --}}
<footer>
  <div class="row" >
      <div class="col-md-12 text-center">
           <p>2021 Muntok White Pepper. All rights </p> 
      </div>
    </div>
</footer>
{{-- Footer End --}}

<script src="js/scritp.js"></script>   
<script src="js/jquery-3.6.0.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".swiper-container", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
          rotate: 20,
          stretch: 0,
          depth: 0,
          modifier: 1,
          slideShadows: true,
      },
      loop: true,
  });
  </script> 
  <!-- GetButton.io widget -->
<script type="text/javascript">
  (function () {
      var options = {
          whatsapp: "+6287743145956", // WhatsApp number
          call_to_action: "Contact us", // Call to action
          position: "right", // Position may be 'right' or 'left'
      };
      var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
      s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
      var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
  })();
</script>
<!-- /GetButton.io widget -->
  </body>
</html>
