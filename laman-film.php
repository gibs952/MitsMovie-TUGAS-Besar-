<?php
session_start();
if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mits Movie | Semua Film</title>
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
          <a class="navbar-brand" href="#semua-film">
            <img src="image/mistlogo.png" alt="Mits Movie" width="45" height="45" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon navbar-light"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link text-white" aria-current="page" href="#semua-film">Home</a>
              <a class="nav-link text-white" href="#about">About</a>
              <a class="nav-link text-white" href="delete.php">Hapus Akun</a>
              <button type="button" class="btn btn-warning" onclick="document.location='edit-pwd.php'">Ubah Pass</button>
              <button type="button" class="btn btn-danger" onclick="document.location='logout.php'">Logout</button>
            </div>
          </div>
        </div>
      </nav>
    </section>
    <!-- navbar end -->
    <!-- Carousel (slide berjalan) -->
    <section id="semua-film" class="container">
      <h1 class="text-white mt-4">All Film</h1>

      <!-- card movie -->
            <div class="row row-cols-1 row-cols-md-5 g-4 ">
              <div class="col">
                <div class="card card-hover bg-dark border-0 h-100">
                  <img src="Image/coco.jpg" class="card-img-top" alt="Coco (2017)" />
                  <div class="card-body text-center text-white">
                    <h5 class="card-title">Coco</h5>
                    <p class="card-text mt-0">(2017)</p>
                    <a href="player.php" class="stretched-link"></a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-hover bg-dark border-0 h-100">
                  <img src="Image/soul.jpg" class="card-img" alt="Coco (2017)" />
                  <div class="card-body text-center text-white">
                    <h5 class="card-title">Soul</h5>
                    <p class="card-text mt-0">(2020)</p>
                    <a href="player.php" class="stretched-link"></a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-hover bg-dark border-0 h-100">
                  <img src="Image/Shangchi.jpg" class="card-img-top" alt="Coco (2017)" />
                  <div class="card-body text-center text-white">
                    <h5 class="card-title">Shangchi</h5>
                    <p class="card-text mt-0">(2021)</p>
                    <a href="player.php" class="stretched-link"></a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-hover bg-dark border-0 h-100">
                  <img src="Image/bigm.jpg" class="card-img-top" alt="Coco (2017)" />
                  <div class="card-body text-center text-white">
                    <h5 class="card-title">Big Mouth</h5>
                    <p class="card-text mt-0">(2022)</p>
                    <a href="player.php" class="stretched-link"></a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-hover bg-dark border-0 h-100">
                  <img src="Image/Bean.jpg" class="card-img-top" alt="Coco (2017)" />
                  <div class="card-body text-center text-white">
                    <h5 class="card-title">Bean</h5>
                    <p class="card-text mt-0">(1997)</p>
                    <a href="player.php" class="stretched-link"></a>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card card-hover bg-dark border-0 h-100">
                  <img src="Image/soul.jpg" class="card-img" alt="Coco (2017)" />
                  <div class="card-body text-center text-white">
                    <h5 class="card-title">Soul</h5>
                    <p class="card-text mt-0">(2020)</p>
                    <a href="player.php" class="stretched-link"></a>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card card-hover bg-dark border-0 h-100">
                  <img src="Image/civilwar.jpg" class="card-img" alt="Civilwar" />
                  <div class="card-body text-center text-white">
                    <h5 class="card-title">Captain America: Civilwar</h5>
                    <p class="card-text mt-0">(2016)</p>
                    <a href="player.php" class="stretched-link"></a>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card card-hover bg-dark border-0 h-100">
                  <img src="Image/groot.jpg" class="card-img" alt="Groot" />
                  <div class="card-body text-center text-white">
                    <h5 class="card-title">Groot</h5>
                    <p class="card-text mt-0">(2022)</p>
                    <a href="player.php" class="stretched-link"></a>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card card-hover bg-dark border-0 h-100">
                  <img src="Image/spiderman.jpg" class="card-img" alt="No Way Home" />
                  <div class="card-body text-center text-white">
                    <h5 class="card-title">Spiderman: No Way Home</h5>
                    <p class="card-text mt-0">(2021)</p>
                    <a href="player.php" class="stretched-link"></a>
                  </div>
                </div>
              </div>




            </div>
        </div>
      </div>
    </section>

    <!-- akhir caraousel -->
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

    <!-- file js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/slider.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
