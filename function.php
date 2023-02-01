<?php
// koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$db = "pengguna";

$koneksi = mysqli_connect($host, $user, $pass, $db);


function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    
    return $rows;
}
// membuat edit

// membuat fungsi dari registrasi.php
function registrasi($data){
    global $koneksi;

    $nama    = $data["nama"];
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi ,$data["password"]);
    $password2= mysqli_real_escape_string($koneksi ,$data["password2"]);

    $result = mysqli_query($koneksi, "SELECT username FROM data_registrasi WHERE username ='$username'");

    // cek data harus diisi
    if($nama == "" || $username == "" || $password == "" || $password2 == ""){
        echo "<script>
        alert('Semua wajib diisi!');
        </script>";
        return false;
    }

    // cek username sudah ada atau belum

    $result = mysqli_query($koneksi, "SELECT username FROM data_registrasi WHERE username ='$username'");
    if( mysqli_fetch_assoc($result) ){
        echo "<script>
        alert('username sudah terdaftar');
        </script>";
        return false;
    }

    //cek konfirmasi password

    if( $password !== $password2){
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                </>";
                return false;
    }
    // eknripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    // tambahkan user baru ke database
    mysqli_query($koneksi, "INSERT INTO data_registrasi VALUES('','$nama', '$username', '$password')");

    return mysqli_affected_rows($koneksi);
}
?>