<?php 
session_start();
session_destroy();

echo "<script> alert('Terima kasih, anda sudah logout'); 
  window.location = 'login.php'; </script>";
?>