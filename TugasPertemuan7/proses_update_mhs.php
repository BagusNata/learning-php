<?php
//Menangkap value dari form
  $nim            = $_POST['nomorIndukMahasiswa'];
  $nama_mhs       = $_POST['namaMahasiswa'];
  $kode_jurusan   = $_POST['jurusan'];
  $jenis_kelamin  = $_POST['gender'];
  $alamat         = $_POST['alamat'];
  $no_hp          = $_POST['phoneNumber'];
  $email          = $_POST['email'];

  echo $nim           . "<br>";
  echo $nama_mhs      . "<br>";
  echo $kode_jurusan  . "<br>";
  echo $nama_jurusan  . "<br>";
  echo $jenis_kelamin . "<br>";
  echo $alamat        . "<br>";
  echo $no_hp         . "<br>";
  echo $email         . "<br>";

//Membuat koneksi database
  include "koneksi.php";

//membuat query insert data
  $qry = "UPDATE mahasiswa
          SET nama_mhs = '$nama_mhs', kode_jurusan = '$kode_jurusan', 
              jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', 
              no_hp = '$no_hp', email = '$email'
          WHERE nim = '$nim' ";
  $exec = mysqli_query($con, $qry);

  header('location: selectMhs.php?m=1');