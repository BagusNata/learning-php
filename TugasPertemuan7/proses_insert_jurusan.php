<?php
//Menangkap value dari form
  $kode_jurusan   = $_POST['kode_jurusan'];
  $nama_jurusan   = $_POST['nama_jurusan'];


  echo $kode_jurusan . "<br>";
  echo $nama_jurusan . "<br>";

//Membuat koneksi database
  include "koneksi.php";

//membuat query insert data
  $qry = "INSERT INTO jurusan VALUES ('$kode_jurusan','$nama_jurusan')";
  $exec = mysqli_query($con, $qry);

  if ($exec) {
      echo "<script>alert('data berhasil di simpan'); window.location = 'index.php'; </script>";
  } else {
      echo "Data gagal di proses";
  }