<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: palegoldenrod;
            margin: 0;
            padding: 20px;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            color: black;
            margin-bottom: 20px;
            background-color: white;
            padding: 20px;
        }

        a {
            display: inline-block;
            background-color: white;
            font-size: 14px;
            font-weight: 500;
            padding: 10px 16px;
            border-radius: 6px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            letter-spacing: 0.5px;
        }

        table {
            width: 100%;
            max-width: 1000px;
            background-color: white;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
        }

        table th {
            background-color: blue;
            color: white;
        }
</style>
<body>
    <h1>DATA MAHASISWA LENGKAP</h1>
    <a href="tambah.php">+ Tambah Siswa</a>
    <br>
    <table border="1">
        <tr>
            <th>Kode Mahasiswa</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $mahasiswa = mysqli_query($koneksi,"select * from form");
        while($d = mysqli_fetch_array($mahasiswa)){
           ?>
           <tr>
            <td><?php echo $d['kode_mahasiswa']; ?></td>
            <td><?php echo $d['nama_mahasiswa']; ?></td>
            <td><?php echo $d['nim']; ?></td>
            <td><?php echo $d['jurusan']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td>
                <a href="update.php?kode_mahasiswa=<?php echo $d['kode_mahasiswa']; ?>">UPDATE</a>
                <a href="delete.php?kode_mahasiswa=<?php echo $d['kode_mahasiswa']; ?>">DELETE</a>
            </td>
           </tr>
           <?php
        }
        ?>
    </table>
</body>
</html>