<?php

//Menangkap value (nim) yang di delete
  $nim     = $_GET['nim'];

//membuat koneksi ke database
  include "koneksi.php";

//membuat query delete
  $qry = "DELETE FROM mahasiswa WHERE nim = '$nim'";
  $exec = mysqli_query($con,$qry);
  
  header('location: index.php?m=1');