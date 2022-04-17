<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/styles.css">
    <title>Latihan Form</title>
  </head>

  <body>
  <!-- Membuat form input data untuk database -->
  <h1 class="title">Latihan Form HTML</h1> <br>
    <form action="proses_insert.php" method="POST">
      <fieldset>
        <legend>Form Input Biodata Mahasiswa</legend>
        <b>Lengkapi Biodata Dengan Benar</b>
          <table>
            <tr>
              <td>NIM (Nomor Induk Mahasiswa)</td>
              <td> : </td>
              <td><input type="text" name="nomorIndukMahasiswa"></td>
            </tr>
            <tr>
              <td>Nama Mahasiswa</td>
              <td> : </td>
              <td><input type="text" name="namaMahasiswa"></td>
            </tr>
            <tr>
              <td>Jurusan</td>
              <td> : </td>
              <td>
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
              <td>Jenis Kelamin</td>
              <td> : </td>
              <td>
                <input type="radio" name="gender" value="1">   Male
                <input type="radio" name="gender" value="2"> Female
                <input type="radio" name="gender" value="0">  Other
              </td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td> : </td>
              <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
              <td>No HP</td>
              <td> : </td>
              <td><input type="number" name="phoneNumber"></td>
            </tr>
            <tr>
              <td>Email</td>
              <td> : </td>
              <td><input type="email" name="email"></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
                <input type="submit" value="Simpan">
                <input type="submit" value="Kembali">
              </td>
            </tr>
          </table>
      </fieldset>
    </form>
  <br>

  <!-- menampilkan data yg ada di database -->
  <h2 class="title_dataMhs">Data Mahasiswa</h2>
    <table border="1">
        <tr>
          <td>NIM</td>
          <td>Nama Mahasiwa</td>
          <td>Jurusan</td>
          <td>Gender</td>
          <td>Alamat</td>
          <td>No. Hp</td>
          <td>Email</td>
          <td>Action</td>
        </tr>

        <?php
          include "koneksi.php";

          $qry = "SELECT * FROM mahasiswa";
          $exec = mysqli_query($con, $qry);
          while($data = mysqli_fetch_array($exec)) {
        ?>
          <tr>
            <td> <?php echo $data['nim'] ?> </td>
            <td> <?php echo $data['nama_mhs'] ?> </td>
            <td> <?php echo $data['kode_jurusan'] ?> </td>
            <td> <?php echo $data['jenis_kelamin'] ?> </td>
            <td> <?php echo $data['alamat'] ?> </td>
            <td> <?php echo $data['no_hp'] ?> </td>
            <td> <?php echo $data['email'] ?> </td>
            <td> 
              <a style="color:black; margin: 0 0.5rem;" href="edit.php?nim=<?php echo $data['nim']?>"> <img src="Assets/b_edit.png"> Edit </a> ||
              <a style="color:black; margin: 0 0.5rem;" href="proses_delete.php?nim=<?php echo $data['nim']?>"> <img src="Assets/b_drop.png"> Delete </a>
            </td>
          </tr>
        <?php } ?>
    </table>
  </body>
</html>