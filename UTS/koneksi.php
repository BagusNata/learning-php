<?php

$con = mysqli_connect("localhost", "root", "", "bo203_db");
  if($con) {
    //echo "Koneksi berhasil";
  } else {
    echo "Koneksi gagal ke MySQL : " . mysqli_connect_error();
  };

?>