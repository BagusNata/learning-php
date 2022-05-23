<?php 
//mengecek session
session_start();
//belum login
if(empty($_SESSION['username'])){
  $_SESSION['username'] = $data['username'];
  echo "<script> alert('Anda belum login, silahkan login terlebih dahulu!'); 
  window.location = 'login.php'; </script>";
}else {
  //sudah login
  echo "Selamat datang di halaman Home - <a href='logout.php'>Logout</a>";
}

// var_dump($data);
?>