<?php
//Menangkap value dari form
  $fullname   = $_POST['fullname'];
  $username   = $_POST['username'];
  $email      = $_POST['email'];
  $password   = $_POST['password'];


  echo $fullname . "<br>";
  echo $username . "<br>";
  echo $email    . "<br>";
  echo $password . "<br>";

//Membuat koneksi database
  include "koneksi.php";

//membuat query insert data
  $qry = "INSERT INTO user VALUES ('','$fullname','$username','$email','$password')";
  $exec = mysqli_query($con, $qry);

  header('location: login.php');
?>