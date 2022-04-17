<?php
$nim = $_GET['nim'];
include "koneksi.php";

$qry = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_array($exec);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/styles.css">
    <title>Latihan Update Form</title>
  </head>

  <body>
  <!-- Membuat form input data untuk database -->
  <h1 class="title">Latihan Form HTML</h1> <br>
    <form action="proses_update.php" method="POST">
      <fieldset>
        <legend>Form Update Biodata Mahasiswa</legend>
        <b>Lengkapi Biodata Dengan Benar</b> <br>
          <table>
            <tr>
              <td>NIM (Nomor Induk Mahasiswa)</td>
              <td> : </td>
               <td><input type="text" name="nomorIndukMahasiswa" value="<?php echo $data['nim'] ?>" readonly></td>
            </tr>
            <tr>
              <td>Nama Mahasiswa</td>
              <td> : </td>
              <td><input type="text" name="namaMahasiswa" value="<?php echo $data['nama_mhs'] ?>"></td>
              </tr>
            <tr>
              <td>Jurusan</td>
              <td> : </td>
              <td>
                <select name="jurusan" id="jurusan">
                  <option value="001">Sistem informasi</option>
                  <option value="002">Sistem Komputer</option>
                  <option value="004">Teknologi Informasi</option>
                  <option value="005">Bisnis Digital</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td> : </td>
              <td>
                <?php if ($data['jenis_kelamin'] == 1) { ?>
                    <input type="radio" name="gender" value="1" checked>Laki - Laki
                    <input type="radio" name="gender" value="2">Perempuan
                <?php } else { ?>
                    <input type="radio" name="gender" value="1">Laki - Laki
                    <input type="radio" name="gender" value="2" checked>Perempuan
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td> : </td>
              <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
            </tr>
            <tr>
              <td>No HP</td>
              <td> : </td>
              <td><input type="number" name="phoneNumber" value="<?php echo $data['no_hp'] ?>"></td>
            </tr>
            <tr>
              <td>Email</td>
              <td> : </td>
              <td><input type="email" name="email" value="<?php echo $data['email'] ?>"></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
                <input type="submit" value="Update">
              </td>
            </tr>
          </table>
      </fieldset>
    </form>
  <br>
  </body>
</html>