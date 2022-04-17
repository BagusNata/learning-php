<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Looping</title>
  <link rel="stylesheet" href="Pertemuan2/biodataStyles.css">
</head>
<body>
  <h1 class="title">Latihan Looping <hr></h1>

  <style>
    .ganjil {
      color: red;
    }
  </style>
  <?php 

    // $a = 1;
    // echo "<b> While Loop : </br> </b>";
    // while($a <=5) {
    //   echo "• $a </br>";
    //   $a++;
    // };

    // $b = 1;
    // echo "</br>";
    // echo "<b> Do While Loop : </br> </b>";
    // do {
    //   echo "• $b </br>";
    //   $b++;
    // } while ($b <= 5);

    echo "</br>";
    echo "<b> For Loop : </br> </b>";
    for($c=1; $c<=5; $c++) {
     if($c % 2 == 0) {
        echo "<p> • $c adalah bilangan genap.</p>";
     }else {
       echo "<p style='color:red;'> • $c adalah bilangan ganjil.</div>";

    //  note: kalo pake css class kayak gini
    //    echo "<div> • $c adalah bilangan genap.</div>";
    //  }else {
    //    echo "<div class=\"ganjil\"> • $c adalah bilangan ganjil.</div>";
     }
    };

    // echo "</br>";
    // echo "<b> Foreach Loop : </br> </b>";
    // $colors = array("Hitam", "Merah", "Hijau", "Ungu", "Biru");

    // foreach ($colors as $index => $value) {
    //   echo "index : $index, value : $value <br>";
    // };   

  ?>
</body>
</html>