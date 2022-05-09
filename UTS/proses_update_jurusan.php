<?php
//Menangkap value dari form
  $kode_jurusan   = $_POST['kode_jurusan'];
  $nama_jurusan   = $_POST['nama_jurusan'];


  echo $kode_jurusan . "<br>";
  echo $nama_jurusan . "<br>";

//Membuat koneksi database
  include "koneksi.php";

//membuat query insert data
  $qry = "UPDATE jurusan
          SET nama_jurusan = '$nama_jurusan'
          WHERE kode_jurusan = '$kode_jurusan' ";
  $exec = mysqli_query($con, $qry);

  header('location: selectJurusan.php?m=1');
?>