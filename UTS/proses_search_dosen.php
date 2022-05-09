<?php

//Menangkap value (nim) yang di delete
  $nidn     = $_GET['nidn'];

//membuat koneksi ke database
  include "koneksi.php";

//membuat query delete
  $qry = "DELETE FROM dosen WHERE nidn = '$nidn'";
  $exec = mysqli_query($con,$qry);
  
  header('location: selectDosen.php?m=1');
?>