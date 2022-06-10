<?php
   function search() {
     ?>
     <form class="search-box-body" action="searchDosen.php" method="POST">
        <input class="input-shape" type="text" placeholder="Search..." name="search">
        <button class="button-search" type="submit" name="submit-search"> 
          <i class="fa fa-search"></i>
        </button>
      </form>
     <?php
   }

   function selectData() {
    include "koneksi.php";
    $qry = "SELECT * FROM dosen";
    $exec = mysqli_query($con, $qry);
    while($data = mysqli_fetch_array($exec)) {
  ?>
  <tbody class="table-bodyMhs">
    <tr>
      <td class="text-center"> <?php echo $data['nidn']           ?> </td>
      <td class="text-center"> <?php echo $data['nama_dosen']     ?> </td>
      <td class="text-center"> <?php echo $data['pendidikan']     ?> </td>
      <td class="text-center"> <?php echo $data['tgl_lahir']      ?> </td>
      <td class="text-center"> <?php echo $data['jenis_kelamin']  ?> </td>
      <td class="text-center"> <?php echo $data['alamat']         ?> </td>
      <td class="text-center"> <?php echo $data['no_hp']          ?> </td>
      <td class="text-center"> <?php echo $data['email']          ?> </td>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/styles.css">
    <link rel="icon" href="Assets/Image/Logo.png" type="image/jpg" />
    <title>Select Dosen - Bagus Nata</title>
  </head>

  <body class="bg-blackTheme">
    <!-- NAVBAR -->
    <?php
      include "navbar.php";
    ?>

    <!-- Content --> 
      <div class="container">  
        <div class="titleBox">
          <h1 class="title">Data</h1>
          <h1 class="title2">Dosen</h1>
        </div>  
    <!-- SearchBox -->
      <?php
        search();
      ?>      
    <!-- Table -->
    <div class="table-responsive-sm shadow">
      <table class="table table-bordered" border="3">
        <thead class="table-dark table_title">
          <tr>
            <th scope="col">NIDN</th>
            <th scope="col">Nama Dosen</th>
            <th scope="col">Pendidikan</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. Hp</th>
            <th scope="col">Email</th>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>