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
    <nav class="navbar navbar-expand-lg navbar-dark bg-nav">
      <div class="mynavbar collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <!-- Navbar home -->
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <!-- Navbar Insert -->
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Insert
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="insertMhs.php">Data Mahasiswa</a>
              <a class="dropdown-item" href="insertJurusan.php">Data Jurusan</a>
              <a class="dropdown-item" href="insertDosen.php">Data Dosen</a>
            </div>
          <!-- Navbar Select -->
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Select
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="selectMhs.php">Data Mahasiswa</a>
              <a class="dropdown-item" href="selectJurusan.php">Data Jurusan</a>
              <a class="dropdown-item" href="selectDosen.php">Data Dosen</a>
            </div>
          </li>
          <!-- Navbar Update -->
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Update
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="updateMhs.php">Data Mahasiswa</a>
              <a class="dropdown-item" href="updateJurusan.php">Data Jurusan</a>
              <a class="dropdown-item" href="updateDosen.php">Data dosen</a>
            </div>
          </li>
          <!-- Navbar Delete -->
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Delete
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="deleteMhs.php">Data Mahasiswa</a>
              <a class="dropdown-item" href="deleteJurusan.php">Data Jurusan</a>
              <a class="dropdown-item" href="deleteDosen.php">Data dosen</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- TABLE -->
    <div class="container"> 
      </br> </br>
      <h1 class="title">Input Data Mahasiswa</h1>
      </br> 
      <div class="form-display">
        <div class="table-responsive-sm insert-form-body shadow" >
          <form action="proses_insert_mhs.php" method="POST">
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
                      <select name="jurusan" id="jurusan">
                        <option value="001">Sistem informasi</option>
                        <option value="002">Sistem Komputer</option>
                        <option value="003">Manajemen Informatika</option>
                        <option value="004">Teknologi Informasi</option>
                        <option value="005">Bisnis Digital</option>
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
                    <td class="td-space"> <input type="email" name="email"></td>
                  </tr>
                  <tr>
                    <td class="td-space">NIDN (Nomor Induk Dosen Nasional)</td>
                    <td class="td-space"> : </td>
                    <td class="td-space"> <input type="text" name="nidn"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td class="td-space">
                      <!-- button update -->
                      <button 
                        type="submit" 
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>