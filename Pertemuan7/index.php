<?php 
  function panggilNama($umur, $gender) {
    $nama = "Umur made : " . $umur . "</br>" . "saya adalah seorang " . $gender;

    return $nama;
  }

  function perkalian($bil1, $bil2) {
    $hasil = $bil1 * $bil2;

    return $hasil;
  }

  function operasi($bil1, $bil2, $operator) {
    $text = "Hasil dari " . $bil1 . " " . $operator . " " . $bil2 . " " . "adalah ";
    $hasil = 0;
    if($operator == "+") {
      $hasil = $bil1 + $bil2;
    }else if ($operator == "-") {
      $hasil = $bil1 - $bil2;
    }else if ($operator == "*") {
      $hasil = $bil1 * $bil2;
    }else if ($operator == "/") {
      $hasil = $bil1 / $bil2;
    }else {
      $hasil = "Operator tidak valid! ";
    }

    return $text . $hasil;
  }

  echo operasi(10, 5, "+");
  // echo "Hasil perkalian : " . perkalian(3, 5);
  // echo panggilNama(20, 'laki-laki');
?>

