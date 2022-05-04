<?php
//Menangkap value dari form
  $nim            = $_POST['nomorIndukMahasiswa'];
  $nama_mhs       = $_POST['namaMahasiswa'];
  $kode_jurusan   = $_POST['jurusan'];
  $jenis_kelamin  = $_POST['gender'];
  $alamat         = $_POST['alamat'];
  $no_hp          = $_POST['phoneNumber'];
  $email          = $_POST['email'];
  $nidn           = $_POST['nidn'];

  echo $nim           . "<br>";
  echo $nama_mhs      . "<br>";
  echo $kode_jurusan  . "<br>";
  echo $nama_jurusan  . "<br>";
  echo $jenis_kelamin . "<br>";
  echo $alamat        . "<br>";
  echo $no_hp         . "<br>";
  echo $email         . "<br>";
  echo $nidn         . "<br>";

//membuat query search data
  $qry = "SELECT * mahasiswa
          WHERE nim = '$nim' OR nama_mhs = '$nama_mhs' ";
  $exec = mysqli_query($con, $qry);