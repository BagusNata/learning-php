<?php 
//koneksikan ke database
  include "koneksi.php";

  class Login extends database{
    function __construct(){
    parent::__construct();
    }
    
    function login_proses($username, $password)
    {
      //mencocokkan data user(username,password) pada database
        $qry = "SELECT * FROM user 
        WHERE (username = '$username' OR email = '$username') AND password = '$password'";
        $exec = mysqli_query($this->conn,$qry);
        $data = mysqli_fetch_array($exec);
        
        return $data;
    }
  }

  $clogin = new Login();
  $username = $_POST['username'];
  $password = $_POST['password'];
  $data = $clogin->login_proses($username, $password);

  if($data)
  {
      session_start();
      $_SESSION['username'] = $data['username'];
      echo "<script>alert('Login Berhasil');window.location = 'index.php'</script>";
      
  }else{
      echo "Login gagal, user tidak ditemukan";
  }
?>
