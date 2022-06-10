<?php 

  if(isset($_POST['submitInsert'])) {
    
    $file = $_FILES['uploadFoto'];

    $fileName     = $_FILES['uploadFoto']['name'];
    $fileTmpName  = $_FILES['uploadFoto']['tmp_name'];
    $fileSize     = $_FILES['uploadFoto']['size'];
    $fileError    = $_FILES['uploadFoto']['error'];
    $fileType     = $_FILES['uploadFoto']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)) {
      if($fileError === 0) {
        if($fileSize < 500000) {
          $fileNewName = "Profile" . $nim . $fileActualExt;
          $fileDestination = 'Assets/UploadFoto/' . $fileNewName;
          move_uploaded_file($fileTmpName, $fileDestination);
          //Proses upload data ke database
          include "koneksi.php";
          $qry = "INSERT INTO mahasiswa 
                  VALUES ('$nim','$nama_mhs','$kode_jurusan','$jenis_kelamin','$alamat','$no_hp',
                  '$email','$nidn','$fileNewName')";
          $exec = mysqli_query($con, $qry);
          header('location: index.php?m=1');
        } else {
          echo "Maaf, foto terlalu besar, maximal size 50 MB";
        }
      } else {
        echo "Maaf, terjadi error saat upload file!";
      }
    } else {
      echo "Maaf, type file ini tidak diijinkan!";
    }
  };
?>
