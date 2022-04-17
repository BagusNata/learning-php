<?php

//Menangkap value (nim) yang di delete
  $nim     = $_GET['nim'];

//membuat koneksi ke database
  include "koneksi.php";

//membuat query delete
  $qry = "DELETE FROM mahasiswa WHERE nim = '$nim'";
  $exec = mysqli_query($con,$qry);
  
  header('location: index.php?m=1');


  // if ($exec) {
  //     echo "<script>alert('data berhasil di hapus!'); window.location = 'index.php'; </script>";
  // } else {
  //     echo "Data gagal di proses!";
  // }