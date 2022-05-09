<?php
   function search() {
     ?>
     <form class="search-box-body" action="searchIndex.php" method="POST">
        <input class="input-shape" type="text" placeholder="Search..." name="search">
        <button class="button-search" type="submit" name="submit-search"> 
          <i class="fa fa-search"></i>
        </button>
      </form>
     <?php
   }

   function selectData() {
    include "koneksi.php";

    $qry = "SELECT * FROM mahasiswa";
    $exec = mysqli_query($con, $qry);
    while($data = mysqli_fetch_array($exec)) {
  ?>
  <tbody class="table-bodyMhs">
    <tr>
      <td class="text-center"> <?php echo $data['nim']            ?> </td>
      <td class="text-center"> <?php echo $data['nama_mhs']       ?> </td>
      <td class="text-center"> <?php echo $data['kode_jurusan']   ?> </td>
      <td class="text-center"> <?php echo $data['jenis_kelamin']  ?> </td>
      <td class="text-center"> <?php echo $data['alamat']         ?> </td>
      <td class="text-center"> <?php echo $data['no_hp']          ?> </td>
      <td class="text-center"> <?php echo $data['email']          ?> </td>
      <td class="text-center"> <?php echo $data['nidn']          ?> </td>
    </tr>
    <?php } ?>
  </tbody>
  <?php
   }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/stylesUTS.css">
    <title>Bagus Nata</title>
  </head>

  <body>
    <!-- NAVBAR -->
    <?php
      include "navbar.php";
    ?> 
    <!-- Content --> 
      <div class="container"> 
      </br> 
      <h1 class="title">Data Mahasiswa</h1>
      </br>
      <!-- SearchBox -->
      <?php
        search();
      ?>
      <!-- Table -->
      <div class="table-responsive-sm shadow">
        <table class="table" border="3">
          <thead class="thead-dark table_title">
            <tr>
              <th scope="col">NIM</th>
              <th scope="col">Nama Mahasiwa</th>
              <th scope="col">Kode Jurusan</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Alamat</th>
              <th scope="col">No. Hp</th>
              <th scope="col">Email</th>
              <th scope="col">NIDN</th>
            </tr>
          </thead>
          <!-- show Data Table -->
            <?php
              selectData();
            ?>
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
      const flashdata = $('.flash-data').data('flashdata')
      if (flashdata) {
          Swal.fire({
              icon  : 'success',
              title : 'Success',
              text  : 'Record has been deleted!',
          })
      }
    </script>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>