<?php
//Menangkap value dari form
  $nim            = $_POST['nomorIndukMahasiswa'];
  $nama_mhs       = $_POST['namaMahasiswa'];
  $kode_jurusan   = $_POST['jurusan'];
  $jenis_kelamin  = $_POST['gender'];
  $alamat         = $_POST['alamat'];
  $no_hp          = $_POST['phoneNumber'];
  $email          = $_POST['email'];
  $nidn          = $_POST['dosen'];

  echo $nim           . "<br>";
  echo $nama_mhs      . "<br>";
  echo $kode_jurusan  . "<br>";
  echo $jenis_kelamin . "<br>";
  echo $alamat        . "<br>";
  echo $no_hp         . "<br>";
  echo $email         . "<br>";
  echo $nidn         . "<br>";

//Membuat koneksi database
  include "koneksi.php";

//membuat query insert data
  $qry = "INSERT INTO mahasiswa VALUES ('$nim','$nama_mhs','$kode_jurusan','$jenis_kelamin','$alamat','$no_hp','$email','$nidn')";
  $exec = mysqli_query($con, $qry);

  header('location: index.php?m=1');
?>
