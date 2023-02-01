<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mits Movie | nonton film</title>
    <link rel="icon" type="image/x-icon" href="image/mistlogo.ico" >
    <!-- panggil css -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- Animate CSS -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- manual -->
    <link rel="stylesheet" href="style/style.css" />
    <!-- splide -->
    <link rel="stylesheet" href="url-to-cdn/splide.min.css">
  </head>
  <body>
    <section id="navbar">
      <!-- navbar start -->
      <nav class="navbar fixed-top navbar-expand-lg gd-mantap">
        <div class="container">
          <a class="navbar-brand" href="#caraousel">
            <img src="image/mistlogo.png" alt="Mits Movie" width="45" height="45" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon navbar-light"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link text-white" aria-current="page" href="#caraousel">Home</a>
              <a class="nav-link text-white" href="#featured">Featured</a>
              <a class="nav-link text-white" href="#trending">Trending</a>
              <a class="nav-link text-white" href="#about">About</a>
              <button type="button" class="btn btn-primary" onclick="document.location='login.php'">Login</button>
            </div>
          </div>
        </div>
      </nav>
      <!-- <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="image/mistlogo.png" alt="Mits Movie" width="45" height="45" />
        </a>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="nav-links">
            <li class="nav-items"><a href="#">Home</a></li>
            <li class="nav-items"><a href="#">Trending</a></li>
            <li class="nav-items"><a href="#">Marvel</a></li>
            <li class="nav-items"><a href="#">About</a></li>
          </ul>
        </div>
      </div>
    </nav> -->
    </section>
    <!-- navbar end -->
    <!-- Carousel (slide berjalan) -->
    <section id="caraousel" class="container">
        <h1 class="display-5 text-white text-center">Nonton Film?</h1>
        <h1 class="text-warning text-center">Mits Movie Aja!</h1>
      <id id="caraouselSlide" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#caraouselSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#caraouselSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#caraouselSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="Image/slider.jpeg" class="d-block w-100" alt="Coco" />
            <div class="carousel-caption d-none d-md-block">
              <h1>Coco</h1>
              <h2>(2017)</h2>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="Image/slider2.jpeg" class="d-block w-100" alt="Soul" />
            <div class="carousel-caption d-none d-md-block">
              <h1>Soul</h1>
              <h2>(2020)</h2>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="Image/slider3.jpeg" class="d-block w-100" alt="Big Mouth" />
            <div class="carousel-caption d-none d-md-block">
              <h1>Big Mouth</h1>
              <h2>(2022)</h2>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#caraouselSlide" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#caraouselSlide" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        </id>
        </div>
 
    </section>
    <!-- akhir caraousel -->
    <!-- Movie list Featured -->
    <section id="featured" class="container">
      <h1 class="text-white mt-4">Featured</h1>

      <!-- card movie -->
            <div class="row row-cols-1 row-cols-md-5 g-4 ">
              <div class="col">
                <div class="card card-hover bg-dark border-0 h-100">
                  <img src="Image/coco.jpg" class="card-img-top" alt="Coco (2017)" />
                  <div class="card-body text-center text-white">
                    <h5 class="card-title">Coco</h5>
                    <p class="card-text mt-0">(2017)</p>
                    <a href="login.php" class="stretched-link"></a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-hover bg-dark border-0 h-100">
                  <img src="Image/soul.jpg" class="card-img" alt="Coco (2017)" />
                  <div class="card-body text-center text-white">
                    <h5 class="card-title">Soul</h5>
                    <p class="card-text mt-0">(2020)</p>
                    <a href="login.php" class="stretched-link"></a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-hover bg-dark border-0 h-100">
                  <img src="Image/Shangchi.jpg" class="card-img-top" alt="Coco (2017)" />
                  <div class="card-body text-center text-white">
                    <h5 class="card-title">Shangchi</h5>
                    <p class="card-text mt-0">(2021)</p>
                    <a href="login.php" class="stretched-link"></a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-hover bg-dark border-0 h-100">
                  <img src="Image/bigm.jpg" class="card-img-top" alt="Coco (2017)" />
                  <div class="card-body text-center text-white">
                    <h5 class="card-title">Big Mouth</h5>
                    <p class="card-text mt-0">(2022)</p>
                    <a href="login.php" class="stretched-link"></a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-hover bg-dark border-0 h-100">
                  <img src="Image/Bean.jpg" class="card-img-top" alt="Coco (2017)" />
                  <div class="card-body text-center text-white">
                    <h5 class="card-title">Bean</h5>
                    <p class="card-text mt-0">(1997)</p>
                    <a href="login.php" class="stretched-link"></a>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- Card List Film end-->
    <!-- Trending -->
    <section id="trending" class="container">
        <h1 class="text-white mt-4">Trending </h1>
  
        <!-- card movie -->
              <div class="row row-cols-1 row-cols-md-5 g-4">
                <div class="col">
                    <div class="card card-hover bg-dark border-0 h-100">
                      <img src="Image/bigm.jpg" class="card-img-top" alt="Coco (2017)" />
                      <div class="card-body text-center text-white">
                        <h5 class="card-title">Big Mouth</h5>
                        <p class="card-text mt-0">(2022)</p>
                        <a href="login.php" class="stretched-link"></a>
                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="card card-hover bg-dark border-0 h-100">
                      <img src="Image/Bean.jpg" class="card-img-top" alt="Coco (2017)" />
                      <div class="card-body text-center text-white">
                        <h5 class="card-title">Bean</h5>
                        <p class="card-text mt-0">(1997)</p>
                        <a href="login.php" class="stretched-link"></a>
                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="card card-hover bg-dark border-0 h-100">
                      <img src="Image/Shangchi.jpg" class="card-img-top" alt="Coco (2017)" />
                      <div class="card-body text-center text-white">
                        <h5 class="card-title">Shangchi</h5>
                        <p class="card-text mt-0">(2021)</p>
                        <a href="login.php" class="stretched-link"></a>
                      </div>
                    </div>
                  </div>

                <div class="col">
                    <div class="card card-hover bg-dark border-0 h-100">
                    <img src="Image/soul.jpg" class="card-img-top" alt="Coco (2017)" />
                    <div class="card-body text-center text-white">
                      <h5 class="card-title">Soul</h5>
                      <p class="card-text mt-0">(2020)</p>
                      <a href="registrasi.php" class="stretched-link"></a>
                    </div>
                  </div>
                </div> 
                
                <div class="col">
                    <div class="card card-hover bg-dark border-0 h-100">
                      <img src="Image/coco.jpg" class="card-img-top" alt="Coco (2017)" />
                      <div class="card-body text-center text-white">
                        <h5 class="card-title">Coco</h5>
                        <p class="card-text mt-0">(2017)</p>
                        <a href="login.php" class="stretched-link"></a>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </section>

      <!-- end Trending -->
      <!-- About -->
    <section id="about">
        <div class="container">
            
            <div class="row row-cols-1 row-cols-md-2 text-center">
                <div class="col h-100">
                    <img src="image/mistlogo.png" alt="Mitsmovie" class="persen">
                </div>
                <div class="col h-100">
                    <h1 class="text-mantoy">About Us</h1>
                    <div class="row row-cols-1 row-cols-md-2 text-center">
                    <div class="col">
                    <div class="card card-hover bg-transparan border-0 h-100">
                      <img src="Image/ig1.png" class="card-img-top persen" alt="Coco (2017)" />
                      <div class="card-body text-center text-white">
                        <h5 class="card-title">@wildan19official</h5>
                        <a href="https://www.instagram.com/wildan19official/" class="stretched-link"></a>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card card-hover bg-transparan border-0 h-100">
                      <img src="Image/ig1.png" class="card-img-top persen" alt="Coco (2017)"/>
                      <div class="card-body text-center text-white">
                        <h5 class="card-title">@meldonals</h5>
                        <a href="https://www.instagram.com/meldonals/" class="stretched-link"></a>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
        </div>


    </section>

    <footer class="text-center text-white bg-black"> melani </footer>

    <!-- file js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/slider.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
