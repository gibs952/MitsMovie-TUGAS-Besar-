<?php 
require 'function.php';

if(isset($_POST["register"])){
  if ( registrasi($_POST) > 0){
    header("Location: success_register.php");
exit;
  }else {
    echo mysqli_error($koneksi);
  }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up | Mitsmovie</title>
    <link rel="icon" type="image/x-icon" href="image/mistlogo.ico" />

    <!-- style -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/style.css" />
    <!-- <link rel="stylesheet" href="style/login.css" /> -->
  </head>
  <body>
    <section id="back" class="vh-100">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-12 col-xl-11">
            <div class="card text-white kartu-login" style="border-radius: 25px">
              <div class="card-body p-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 animate__animated animate__rubberBand">Registrasi</p>

                    <form class="mx-1 mx-md-4" method="post">
                      <div class="d-flex flex-row align-items-center mb-4 animate__animated animate__backInUp">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="text" name="nama" id="nama" class="form-control" />
                          <label class="form-label" for="nama">Nama Anda</label>
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4 animate__animated animate__backInUp">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="text" name="username" id="username" class="form-control" />
                          <label class="form-label" for="username">Username</label>
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4 animate__animated animate__backInUp">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="password" name="password" id="password" class="form-control" />
                          <label class="form-label" for="password">Password</label>
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4 animate__animated animate__backInUp">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="password" name="password2" id="password2" class="form-control" />
                          <label class="form-label" for="password2">Konfirmasi Password</label>
                        </div>
                      </div>
                      <div class="d-flex row-cols-md-3 justify-content-center mx-4 mb-3 mb-lg-4 text-center">
                      <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" name="register" class="btn btn-primary btn-lg btn-hover">Register</button>
                      </div>
                      <div class="col text-center">
                          <h1 class="fs-4">OR</h1>
                        </div>
                        <div class="col text-center">
                          <button type="button"class="btn btn-success btn-lg btn-hover" onclick="document.location='login.php'">Login</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-md-10 col-lg-6 col-xl-7 d-flex justify-content-center order-1 order-lg-2 ">
                    <img src="Image/mistlogo.png" class="img-fluid persen animate__animated animate__bounceInRight" alt="mistlogo" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- scirpt -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
  </body>
</html>
