<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/styles.css">
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
            </div>
          <!-- Navbar Select -->
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Select
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="selectMhs.php">Data Mahasiswa</a>
              <a class="dropdown-item" href="selectJurusan.php">Data Jurusan</a>
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
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- TABLE -->
    <div class="container"> 
      </br> </br>
      <h1 class="title">Update Data Mahasiswa</h1>
      </br> 
      <div class="table-responsive-sm"  
          style="box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000,
          5px 17px 41px 27px rgb(0 0 0 / 46%);">
        <table class="table" border="3">
          <thead class="thead-dark table_title">
            <tr>
              <th scope="col">NIM</th>
              <th scope="col">Nama Mahasiwa</th>
              <th scope="col">Kode Jurusan</th>
              <th scope="col">Gender</th>
              <th scope="col">Alamat</th>
              <th scope="col">No. Hp</th>
              <th scope="col">Email</th>
              <th scope="col">Action</th>
            </tr>
          </thead>

          <?php
            include "koneksi.php";

            $qry = "SELECT * FROM mahasiswa";
            $exec = mysqli_query($con, $qry);
            while($data = mysqli_fetch_array($exec)) {
          ?>

          <tbody class="table-body">
            <tr>
              <td style='text-align:center;'> <?php echo $data['nim']            ?> </td>
              <td>                            <?php echo $data['nama_mhs']       ?> </td>
              <td style='text-align:center;'> <?php echo $data['kode_jurusan']   ?> </td>
              <td style='text-align:center;'> <?php echo $data['jenis_kelamin']  ?> </td>
              <td>                            <?php echo $data['alamat']         ?> </td>
              <td>                            <?php echo $data['no_hp']          ?> </td>
              <td>                            <?php echo $data['email']          ?> </td>
              <td style="text-align: center;"> 
                <a style="color:black;" href="editMhs.php?nim=<?php echo $data['nim']?>" class="btn-edit"> <img src="Assets/Image/b_edit.png"> Edit </a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

    </div>

    <!-- Untuk merefresh -->
    <?php if (isset ($_GET['m'])) : ?>
      <div class="flash-data" data-flashdata="<?= $_GET['m']; ?>"></div>
    <?php endif; ?>

    <!-- Optional JavaScript -->
    <!-- SweetAlert2 --> 
    <script src="jquery-3.6.0.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script>
      $('.btn-edit').on('click', function(e) {
          e.preventDefault();
          const href = $(this).attr('href')
          Swal.fire({
              title : "Are You Sure?",
              text  : 'You will redirected to edit page!',
              icon  : 'warning',
              showCancelButton  : true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor : '#d33',
              confirmButtonText : 'Yes',
          }). then ((result) => {
                  if (result.value) {
                      document.location.href = href;
                  }
          })
      })
      </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>