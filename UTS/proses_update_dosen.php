<?php
//Menangkap value dari form
  $nidn           = $_POST['nidn'];
  $nama_dosen     = $_POST['namaDosen'];
  $pendidikan     = $_POST['pendidikan'];
  $tgl_lahir      = $_POST['tglLahir'];
  $jenis_kelamin  = $_POST['gender'];
  $alamat         = $_POST['alamat'];
  $no_hp          = $_POST['phoneNumber'];
  $email          = $_POST['email'];

  echo $nidn          . "<br>";
  echo $nama_dosen    . "<br>";
  echo $pendidikan    . "<br>";
  echo $tgl_lahir     . "<br>";
  echo $jenis_kelamin . "<br>";
  echo $alamat        . "<br>";
  echo $no_hp         . "<br>";
  echo $email         . "<br>";

//Membuat koneksi database
  include "koneksi.php";

//membuat query insert data
  $qry = "UPDATE dosen
          SET nama_dosen = '$nama_dosen', pendidikan = '$pendidikan', 
              tgl_lahir = '$tgl_lahir', jenis_kelamin = '$jenis_kelamin', 
              alamat = '$alamat', no_hp = '$no_hp', email = '$email'
          WHERE nidn = '$nidn' ";
  $exec = mysqli_query($con, $qry);

  header('location: selectDosen.php?m=1');
?>