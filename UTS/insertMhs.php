<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/styles.css">
    <link rel="icon" href="Assets/Image/Logo.png" type="image/jpg" />
    <title>Insert Mahasiswa - Bagus Nata</title>
  </head>

  <body class="bg-blackTheme">
    <!-- NAVBAR -->
    <?php
      include "navbar.php";
    ?>

    <!-- TABLE -->
    <div class="container">  
      <div class="titleBox">
        <h1 class="title">Input Data</h1>
        <h1 class="title2">Mahasiswa</h1>
      </div>  
      <div class="form-display">
        <div class="table-responsive-sm insert-form-body shadow" >
          <form action="proses_insert_mhs.php" method="POST" enctype="multipart/form-data">
            <fieldset>
              <legend class="text-center">Form Input Biodata Mahasiswa</legend> </br>
              <b>Lengkapi Biodata Dengan Benar</b>
                <table>
                  <tr>
                    <td class="td-space">NIM (Nomor Induk Mahasiswa)</td>
                    <td class="td-space"> : </td>
                    <td class="td-space"><input type="text" name="nomorIndukMahasiswa"></td>
                  </tr>
                  <tr>
                    <td class="td-space">Nama Mahasiswa</td>
                    <td class="td-space"> : </td>
                    <td class="td-space"><input type="text" name="namaMahasiswa"></td>
                  </tr>
                  <tr>
                    <td class="td-space">Jurusan</td>
                    <td class="td-space"> : </td>
                    <td class="td-space">
                      <?php
                        include "koneksi.php";
                        $qry = "SELECT * FROM jurusan";
                        $exec = mysqli_query($con, $qry);
                      ?>
                      <!--Buat option-->
                        <select name="jurusan" id="jurusan">
                          <?php while ($row1 = mysqli_fetch_array($exec)):; ?>
                            <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
                          <?php endwhile; ?>
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="td-space">Jenis Kelamin</td>
                    <td class="td-space"> : </td>
                    <td class="td-space">
                      <input type="radio" name="gender" value="1"> Male
                      <input type="radio" name="gender" value="2"> Female
                    </td>
                  </tr>
                  <tr>
                    <td class="td-space">Alamat</td>
                    <td class="td-space"> : </td>
                    <td class="td-space"><input type="text" name="alamat"></td>
                  </tr>
                  <tr>
                    <td class="td-space">No HP</td>
                    <td class="td-space"> : </td>
                    <td class="td-space"><input type="number" name="phoneNumber"></td>
                  </tr>
                  <tr>
                    <td class="td-space">Email</td>
                    <td class="td-space"> : </td>
                    <td class="td-space"><input type="email" name="email"></td>
                  </tr>
                  <tr>
                    <td class="td-space">Dosen Wali</td>
                    <td class="td-space"> : </td>
                    <td class="td-space"> 
                      <?php
                        include "koneksi.php";
                        $qry = "SELECT * FROM dosen";
                        $exec = mysqli_query($con, $qry);
                      ?>
                      <!--Buat option-->
                        <select name="dosen" id="dosen">
                          <?php while ($row1 = mysqli_fetch_array($exec)):; ?>
                            <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
                          <?php endwhile; ?>
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="td-space">Foto</td>
                    <td class="td-space"> : </td>
                    <td class="td-space"><input type="file" name="uploadFoto"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td class="td-space">
                      <!-- button update -->
                      <button 
                        type="submit"
                        name="submitInsert" 
                        class="btn btn-success btn-form"
                        id="btn-simpan">Simpan
                      </button>
                      <!-- button cancel -->
                      <button 
                        type="button"
                        onclick="history.go(-1);" 
                        class="btn btn-danger btn-form" 
                        id="btn-cancel">Cancel
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>