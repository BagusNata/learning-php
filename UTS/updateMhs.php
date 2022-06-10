<?php
   function selectData() {
    include "koneksi.php";
    $qry = "SELECT * FROM mahasiswa";
    $exec = mysqli_query($con, $qry);
    while($data = mysqli_fetch_array($exec)) {
  ?>

  <tbody class="table-body">
    <tr>
      <td class="text-center"> <?php echo $data['nim']            ?> </td>
      <td class="text-center"> <?php echo $data['nama_mhs']       ?> </td>
      <td class="text-center"> <?php echo $data['kode_jurusan']   ?> </td>
      <td class="text-center"> <?php echo $data['jenis_kelamin']  ?> </td>
      <td class="text-center"> <?php echo $data['alamat']         ?> </td>
      <td class="text-center"> <?php echo $data['no_hp']          ?> </td>
      <td class="text-center"> <?php echo $data['email']          ?> </td>
      <td class="text-center"> <?php echo $data['nidn']           ?> </td>
      <td class="text-center"> 
        <?php
        if($data['foto'] == null){
        ?>
          <img
          class="rounded-circle"
          src="Assets/Image/DefaultProfilePicture.jpg"
          alt="<?php echo $data['nama_mhs'] ?> - Profile picture"
          style="object-fit: cover; width: 80px; height: 80px;">   
        <?php
        } else {
        ?>
          <img
          class="rounded-circle"
          src="Assets/UploadFoto/<?php echo $data['foto'] ?>"
          alt="<?php echo $data['nama_mhs'] ?> - Profile picture"
          style="object-fit: cover; width: 80px; height: 80px;"> 
        <?php
        }
        ?>  
      </td>
      <td class="text-center"> 
        <a style="color:black;" href="editMhs.php?nim=<?php echo $data['nim']?>" class="btn-edit"> <img src="Assets/Image/b_edit.png"> Edit </a>
      </td>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/styles.css">
    <link rel="icon" href="Assets/Image/Logo.png" type="image/jpg" />
    <title>Update Mahasiswa - Bagus Nata</title>
  </head>

  <body class="bg-blackTheme">
    <!-- NAVBAR -->
    <?php
      include "navbar.php";
    ?>

    <!-- TABLE -->
    <div class="container">       
        <div class="titleBox">
          <h1 class="title">Update Data</h1>
          <h1 class="title2">Mahasiswa</h1>
        </div>     
      <div class="table-responsive-sm shadow">
        <table class="table table-bordered" border="3">
          <thead class="table-dark table_title">
            <tr>
              <th scope="col">NIM</th>
              <th scope="col">Nama Mahasiwa</th>
              <th scope="col">Kode Jurusan</th>
              <th scope="col">Gender</th>
              <th scope="col">Alamat</th>
              <th scope="col">No. Hp</th>
              <th scope="col">Email</th>
              <th scope="col">NIDN</th>
              <th scope="col">Foto</th>
              <th scope="col">Action</th>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>