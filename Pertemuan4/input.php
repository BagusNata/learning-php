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
<h1 class="title">Latihan Form HTML</h1> <br>

<fieldset>
  <legend>Form Input Biodata Mahasiswa</legend>
  <b>Lengkapi Biodata Dengan Benar</b>
    <table>
      <tr>
        <td>NIM (Nomor Induk Mahasiswa)</td>
        <td> : </td>
        <td><input type="text" name="nomorInduk"></td>
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
        <td><input type="text" name="Alamat"></td>
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
    </form>
</fieldset>

</body>
</html>