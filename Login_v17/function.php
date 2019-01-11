<?php
session_start();
include "./connect.php";

$nis = $_POST['nis'];
$password = $_POST['password'];
if ($nis == "" ||$password == "") {
  header("location: index.php");
}
  $query = "SELECT * FROM tb_siswa WHERE nis = '$nis' AND password = '$password'";
  $result = mysqli_query($connect, $query);

  $num = mysqli_num_rows($result);
  if ($num == 1) {
    echo "<script>
    alert('Login Anda Berhasil') </script>";
    echo "<h1> <a href='add_data.php'>Tambah Data </a> </h1>";
    echo "<h1> <a href='logout.php'>Logout</a> </h1>";
    $_SESSION['nis'] = $nis;
  }
  else {
    echo "<script>
    alert('Login Gagal') </script>";
    echo "<h1> <a href='index.php'> back To Login</a> </h1>";
  }

 ?>
