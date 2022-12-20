<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<h3>
    <a href="crud.php">Kembali</a><br>
    <p>Tambah data mahasiswa</p>
    <h3>
        <form action="tambah_proses.php" method="POST" enctype="multipart/form-data">
            <table>
            <tr>
                    <td>Foto</td>
                    <td>:</td>
                    <td><input type="file" name="foto"  id="foto" required></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="number" name="nim" required></td>
                </tr>
                <tr>
                    <td>Nama lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                    <select name="gender" required>
                    <option>Gender</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" required></td>
                </tr>
                <tr>
                    <td>$nbsp;</td>
                    <td></td>
                    <td><input type="submit" name="tambah" value="tambah"></td>
                </tr>
            </table>
        </form>
    </h3>
</h3>

</body>