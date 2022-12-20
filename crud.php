
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="crud.css">
</head>

<body>
<div class="jumbutron" id="jadwal">
<div class="container">
<div class="col-lg-12 text-center mt-5 mb-5">
<h3 class="display-4">Daftar Mahasiswa</h3>
<a href="tambah.php"><h4>Tambah mahasiswa</h4></a>
<table class="table table-stripped" style="text-align:center" >
<thead class="table-dark" >  
    <th>No.</th>
    <th>Foto</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Gender</th>
    <th>Alamat</th>
    <th>Opsi</th>
</thead>

<?php
include_once 'koneksi.php';
$no=1;
$data=mysqli_query($connection,"SELECT * FROM mahasiswa3 ");
while ($d=mysqli_fetch_array($data)) {
    ?>

    <tr>
        <td> <?php echo $no++; ?></td>
        <td><img src="images/<?php echo $d['foto']?>" width="150" style="text-align: center;"></td>
        <td> <?php echo $d['nim']; ?></td>
        <td> <?php echo $d['nama']; ?></td>
        <td> <?php echo $d['gender']; ?></td>
        <td> <?php echo $d['alamat']; ?></td>
        <td>
            <a href="edit.php ?nim=<?php echo $d['nim'];?>">edit</a>
            <a href="hapus.php ?nim=<?php echo $d['nim'];?>">hapus</a>
        </td>
    </tr>
    <?php

}
?>
</table>
</div>
</div>
</body>
</html>
