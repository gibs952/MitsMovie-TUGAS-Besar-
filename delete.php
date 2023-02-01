<?php

require 'function.php';
if(isset($_POST["hapus"])){

$username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($koneksi, "SELECT * FROM data_registrasi WHERE username = '$username'");

  // cek username
  if(mysqli_num_rows($result) == 1){
    // cek password
    $row = mysqli_fetch_assoc($result);
    // jika berhasil diverifikasi password yang di enskirpsi
    if(password_verify($password, $row["password1"])){
      // set password Baru
      mysqli_query($koneksi, "DELETE FROM data_registrasi WHERE username = '$username'");
      session_start();
      $_SESSION =[];
      session_unset();
      session_destroy();
      header("Location: success_ubah.php");
      exit;
      

    }
  }  
}$error = true;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Password | Mitsmovie</title>
    <link rel="icon" type="image/x-icon" href="image/mistlogo.ico" />

    <!-- style -->
    <!-- animate.css -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     <!--bootstrap  -->
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
                    <p class="text-center h1 fw-bold mb-1 mx-1 mx-md-4 mt-4 animate__animated animate__rubberBand">Hapus Akun</p>
                    <p class="fs-5 text-center mb-1 mx-1 animate__animated animate__fadeInUp">MitsMovie</p>
                    <?php if(isset($_POST["hapus"]) == $error): ?>
                      <p class="fs-5 text-center mb-5 mx-1 animate__animated animate__shakeY text-danger">Username atau Password salah!!</p>
                      <?php endif; ?>

                    <form class="mx-1 mx-md-4" method="post">
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


                      
                        <div class="col text-center">
                          <button type="submit" name="hapus" class="btn btn-primary btn-lg btn-hover animate__animated animate__backInUp">Hapus</button>
                        </div>
                      
                    </form>
                  </div>
                  <div class="col-md-10 col-lg-6 col-xl-7 d-flex justify-content-center order-1 order-lg-2">
                    <img src="Image/mistlogo.png" class="img-fluid persen animate__animated animate__bounceInRight" alt="mistlogo"
                    href="index.php"/>
                    
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
