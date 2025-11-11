<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>
<style>
    body {
      font-family: Arial, sans-serif;
      background-color: palegoldenrod;
      margin: 0;
      padding: 1px;
      display: flex;
      align-items: center;
      justify-content: center; 
      flex-direction: column;
    }

    h2 {
      text-align: center;
      margin: 10px 0;
      padding: 20px;
      color: black;
      margin-bottom: 20px;
      background-color: white;
    }

    a {
      text-decoration: none;
      color: blue;
      margin-bottom: 20px;
      font-weight: bold;
    }

    form {
      width: 100%;
      max-width: 500px;
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      border: 2px solid lightblue;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 8px;
    }

    input[type="text"] {
      width: 100%;
      padding: 6px;
      box-sizing: border-box;
      border: 1px solid black;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: blue;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    legend{
      background-color: brown;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
    }
</style>
<body>
    <h2>UPDATE DATA MAHASISWA</h2>
    <a href="index.php">KEMBALI</a>
    <h3>EDIT DATA MAHASISWA</h3>

    <?php
    include 'koneksi.php';
    $kode_mahasiswa = $_GET['kode_mahasiswa'];
    $data = mysqli_query($koneksi, "select * from form where kode_mahasiswa = '$kode_mahasiswa'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="ubah.php">
          <fieldset>
            <legend>Update</legend>
              <table>
                  <tr>
                      <td>Kode Mahasiswa</td>
                      <td>
                          <input type="text" name="kode_mahasiswa" value="<?php echo $d['kode_mahasiswa']; ?>" readonly>
                      </td>
                  </tr>
                  <tr>
                      <td>Nama Mahasiswa</td>
                      <td><input type="text" name="nama_mahasiswa" value="<?php echo $d['nama_mahasiswa']; ?>"></td>
                  </tr>
                  <tr>
                      <td>NIM</td>
                      <td><input type="text" name="nim" value="<?php echo $d['nim']; ?>"></td>
                  </tr>
                  <tr>
                      <td>Jurusan</td>
                      <td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
                  </tr>
                  <tr>
                      <td>Alamat</td>
                      <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td><input type="submit" value="SIMPAN"></td>
                  </tr>
              </table>
          </fieldset>
        </form>
    <?php
    }
    ?>

</body>
</html>