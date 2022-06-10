<?php
//Menangkap value dari form
  $nim            = $_POST['nomorIndukMahasiswa'];
  $nama_mhs       = $_POST['namaMahasiswa'];
  $kode_jurusan   = $_POST['jurusan'];
  $jenis_kelamin  = $_POST['gender'];
  $alamat         = $_POST['alamat'];
  $no_hp          = $_POST['phoneNumber'];
  $email          = $_POST['email'];
  $nidn           = $_POST['nidn'];
  $foto           = $_POST['uploadFoto'];

  echo $nim           . "<br>";
  echo $nama_mhs      . "<br>";
  echo $kode_jurusan  . "<br>";
  echo $jenis_kelamin . "<br>";
  echo $alamat        . "<br>";
  echo $no_hp         . "<br>";
  echo $email         . "<br>";
  echo $nidn          . "<br>";
  echo $foto          . "<br>";

//Membuat koneksi database
  include "koneksi.php";

//Proses upload update foto dan file
  if(isset($_POST['submitUpdate'])) {
    
    $file = $_FILES['uploadFoto'];

    $fileName     = $_FILES['uploadFoto']['name'];
    $fileTmpName  = $_FILES['uploadFoto']['tmp_name'];
    $fileSize     = $_FILES['uploadFoto']['size'];
    $fileError    = $_FILES['uploadFoto']['error'];
    $fileType     = $_FILES['uploadFoto']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (isset($_POST['uploadFoto'])) {
      //kalo submit foto
      if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
          if($fileSize < 500000) {
            $fileNewName = "Profile" . $nim . "." . $fileActualExt;
            $fileDestination = 'Assets/UploadFoto/' . $fileNewName;
            move_uploaded_file($fileTmpName, $fileDestination);
            //Proses upload data ke database
            include "koneksi.php";
            $qry = "UPDATE mahasiswa
            SET nama_mhs = '$nama_mhs', kode_jurusan = '$kode_jurusan', 
                jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', 
                no_hp = '$no_hp', email = '$email', nidn = '$nidn', foto = '$fileNewName'
            WHERE nim = '$nim' ";
            $exec = mysqli_query($con, $qry);

            header('location: selectMhs.php?m=1');
          } else {
              echo "Maaf, foto terlalu besar, maximal size 50 MB";
            }
        } else {
            echo "Maaf, terjadi error saat upload file!";
          }
      } else {
          echo "Maaf, type file ini tidak diijinkan!";
      }
    } else {
      //kalo gk submit foto
      //Proses upload data ke database
        include "koneksi.php";
        $qry = "UPDATE mahasiswa
        SET nama_mhs = '$nama_mhs', kode_jurusan = '$kode_jurusan', 
                jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', 
                no_hp = '$no_hp', email = '$email', nidn = '$nidn'
            WHERE nim = '$nim' ";
        $exec = mysqli_query($con, $qry);
        header('location: index.php?m=1');
    }
  }
?>