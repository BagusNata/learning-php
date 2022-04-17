
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="biodataStyles.css">
  <title>Tugas Biodata</title>
</head>
<body>
  <h1 class="title">Tugas Biodata <hr></h1>
  <?php 
    $nim = "200030203";
    $nama = "I Made Bagus Nata Dwi Kusuma";
    $tempat_dan_tanggal_lahir = "Denpasar, 30 Agustus 2002";
    $jenis_kelamin = 0;
    $alamat = "Jalan Noja I Gg.IV No.31B - Denpasar Timur, Bali";
    $email = "Bagusnata330@gmail.com";
    $no_handphone = "081237083255";

    echo "<b> Biodata saya : </br> </b>";
    echo "<b> • NIM : </b>" . $nim . "</br>";
    echo "<b> • Nama : </b>" . $nama . "</br>";
    echo "<b> • Email : </b>" . $email . "</br>";
    echo "<b> • Alamat : </b>" . $alamat . "</br>";
    echo "<b> • Jenis kelamin : </b>"; 
      if($jenis_kelamin == 0 ) {
        echo "Laki - laki </br>";
      }else {
        echo "Perempuan </br>";
      };
    echo "<b> • No Handphone : </b>" . $no_handphone . "</br>";
    echo "<b> • Tempat & tanggal lahir : </b>" . $tempat_dan_tanggal_lahir;
  ?>
</body>
</html>
