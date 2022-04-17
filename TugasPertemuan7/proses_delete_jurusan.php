<?php

//Menangkap value (nim) yang di delete
  $kode_jurusan     = $_GET['kode_jurusan'];

//membuat koneksi ke database
  include "koneksi.php";

//membuat query delete
  $qry = "DELETE FROM jurusan WHERE kode_jurusan = '$kode_jurusan'";
  $exec = mysqli_query($con,$qry);

  if ($exec) {
      echo "<script>alert('data berhasil di hapus!'); window.location = 'index.php'; </script>";
  } else {
      echo "Data gagal di proses!";
  }