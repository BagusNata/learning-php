
<?php 
//menangkap value dari form login
$username = $_POST['username'];
$password = $_POST['password'];

//koneksikan ke database
include "koneksi.php";

//mencocokkan data user(username,password) pada database
$qry = "SELECT * FROM user 
WHERE username = '$username' AND password = '$password'";

$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);

if(!empty($data)){
  //berhasil jalan
  session_start();
  $_SESSION['username'] = $data['username'];
  echo "<script> window.location = 'index.php'; </script>";
}else {
  //gagal login re direct ke halaman login
  echo "<script> alert('login gagal!, Silahkan cek username dan password'); 
  window.location = 'login.php'; </script>";
}
?>
