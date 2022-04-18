<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Latihan Pertemuan 7</title>
  </head>
<body>
  <!-- TABLE -->
    <div class="container"> 
      </br> </br>
      <h1 class="title">Latihan Operasi Aritmatika</h1>
      </br> 
      <div class="form-display">
        <div class="table-responsive-sm insert-form-body" >

          <form action="#" method="POST">
            <fieldset>
              <legend class="text-center">Form Operasi Aritmatika</legend> </br>
                <table>
                  <tr>
                    <td class="td-space">Input Bilangan 1</td>
                    <td class="td-space"> : </td>
                    <td class="td-space"><input type="number" name="bilangan1"></td>
                  </tr>
                  <tr>
                    <td class="td-space">Input Bilangan 2</td>
                    <td class="td-space"> : </td>
                    <td class="td-space"><input type="number" name="bilangan2"></td>
                  </tr>
                  <tr>
                    <td class="td-space">Pilih Operator</td>
                    <td class="td-space"> : </td>
                    <td class="td-space">
                      <select name="operator" id="operator">
                        <option value="+">Penjumlahan (+)</option>
                        <option value="-">Pengurangan (-)</option>
                        <option value="*">Perkalian (*)</option>
                        <option value="/">Pembagian (/)</option>
                        <option value="%">Modulus (%)</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td class="td-space">
                      <!-- button proses -->
                      <button 
                        style="margin-top: 10px;
                              border-color: black;
                              border-bottom-width: medium;
                              border-radius: 10px;"
                        type="submit" 
                        class="btn btn-success"
                        id="btn-proses">Proses
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <?php
                    $bilangan1   = $_POST['bilangan1'];
                    $bilangan2   = $_POST['bilangan2'];
                    $operator   = $_POST['operator'];

                    function operasi($bilangan1, $bilangan2, $operator) {
                      $text = "Hasil dari " . $bilangan1 . " " . $operator . " " . $bilangan2 . " " . "adalah ";
                      $hasil = 0;
                      if($operator == "+") {
                        $hasil = $bilangan1 + $bilangan2;
                      }else if ($operator == "-") {
                        $hasil = $bilangan1 - $bilangan2;
                      }else if ($operator == "*") {
                        $hasil = $bilangan1 * $bilangan2;
                      }else if ($operator == "/") {
                        $hasil = $bilangan1 / $bilangan2;
                      }else if ($operator == "%") {
                        $hasil = $bilangan1 % $bilangan2;
                      }else {
                        $hasil = "Operator tidak valid! ";
                      }

                      return $text . $hasil;
                    }
                    ?>
                  </tr>
                   <tr>
                    <td></td>
                    <td></td>
                    <td>
                      
                       <p style="margin-top: 10px"> 
                       <?php
                        echo operasi($bilangan1, $bilangan2, $operator);
                       ?>
                    </td>
                  </tr>
                </table>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
</body>
</html>