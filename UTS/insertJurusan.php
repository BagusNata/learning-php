<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/stylesUTS.css">
    <title>Bagus Nata</title>
  </head>

  <body>
    <!-- NAVBAR -->
    <?php
      include "navbar.php";
    ?>

    <!-- TABLE -->
    <div class="container">  
      </br> </br>
      <h1 class="title">Insert Data Jurusan</h1>
      </br> 
      <div class="form-display">
        <div class="table-responsive-sm insert-form-body shadow" >
          <form action="proses_insert_jurusan.php" method="POST">
            <fieldset>
              <legend class="text-center">Form Input Data Jurusan</legend> </br>
              <b>Lengkapi Data ini Dengan Benar</b>
                <table>
                  <tr>
                    <td class="td-space">Kode Jurursan</td>
                    <td class="td-space"> : </td>
                    <td class="td-space"><input type="text" name="kode_jurusan"></td>
                  </tr>
                  <tr>
                    <td class="td-space">Nama Jurursan</td>
                    <td class="td-space"> : </td>
                    <td class="td-space"><input type="text" name="nama_jurusan"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td class="td-space">
                      <!-- button update -->
                      <button "
                        type="submit" 
                        class="btn btn-success btn-form"
                        id="btn-simpan">Simpan
                      </button>
                      <!-- button cancel -->
                      <button 
                        type="button"
                        onclick="history.go(-1);"
                        class="btn btn-danger btn-form" 
                        id="btn-cancel"> Cancel
                      </button>
                    </td>
                  </tr>
                </table>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>