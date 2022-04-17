<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Operator</title>
</head>
<body>
  <h1>Ini Halaman Latihan Operator</h1>
  <?php 
    $x = 10;
    $y = 25;

    $penambahan = $x + $y;
    echo "hasil penambahan dari $x dan $y adalah " . $penambahan . "</br>";

     $pengurangan = $x - $y;
    echo "hasil pengurangan dari $x dan $y adalah " . $pengurangan . "</br>";

     $perkalian = $x * $y;
    echo "hasil perkalian dari $x dan $y adalah " . $perkalian . "</br>";

     $pembagian = $x / $y;
    echo "hasil pembagian dari $x dan $y adalah " . $pembagian . "</br>";

     $modulus = $x % $y;
    echo "hasil modulus dari $x dan $y adalah " . $modulus . "</br>";
   ?>
</body>
</html>