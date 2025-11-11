<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
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

    a{
      color: blue;
      margin-bottom: 20px;
      font-weight: bold;
      background-color: white;
      padding: 10px;
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
    <h2>FORM PENDAFTARAN MAHASISWA</h2>
    <a href="index.php">Kembali</a>
    <h2>TAMBAH MAHASISWA</h2>
    <div class="container">
        <form method="post" action="tambah_aksi.php">
            <fieldset>
              <legend>Form Input</legend>
                  <table>
                      <tr>
                          <td>Kode Mahasiswa</td>
                          <td><input type="text" name="kode_mahasiswa"></td>
                      </tr>
                      <tr>
                          <td>Nama Mahasiswa</td>
                          <td><input type="text" name="nama_mahasiswa"></td>
                      </tr>
                      <tr>
                          <td>NIM</td>
                          <td><input type="text" name="nim"></td>
                      </tr>
                      <tr>
                          <td>Jurusan</td>
                          <td><input type="text" name="jurusan"></td>
                      </tr>
                      <tr>
                          <td>Alamat</td>
                          <td><input type="text" name="alamat"></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td><input type="submit" value="SIMPAN"></td>
                      </tr>
                  </table>
            </fieldset>
        </form>
    </div>
</body>
</html>