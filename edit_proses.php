<?php

if (isset($_POST['simpan']))
{
    include ('koneksi.php');
    $nim         =$_POST['nim'];
    $nama        =$_POST['nama'];
    $gender      =$_POST['gender'];
    $alamat      =$_POST['alamat'];
    $foto = $_FILES['foto']['name'];
    $lokasi_foto = $_FILES['foto']['tmp_name'];
    $folder = "./images/";

    if ($foto != "") {
        $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
        $x = explode('.', $foto);
        $ekstensi = strtolower(end($x));
        $angka_acak = rand(1, 999);
        $nama_foto_baru = $angka_acak . '-' . $foto;
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($lokasi_foto, $folder . $nama_foto_baru);
            $update = mysqli_query($connection, "update mahasiswa3 set
    
    nama        ='$nama',
    gender      ='$gender',
    alamat      ='$alamat',
    foto        ='$nama_foto_baru'
    where nim   ='$nim'")
                or die(mysqli_error());
        } else {
            echo "Tipe file tidak cocok";
        }
    if ($update)
    {
        echo "<h2>data berhasil diupdate<h2>";
        echo "<script>window.location='crud.php'</script>";
    } else {
        }
        echo "<h2>gagal menyimpan data<h2>";
        echo "<a href =edit.php ?nim=".$nim."'kembali</a>";
    } else  {
        $update = mysqli_query($connection, "update mahasiswa3 set
    
        nama        ='$nama',
        gender      ='$gender',
        alamat      ='$alamat',
        where nim   ='$nim'")
            or die(mysqli_error());
    }
}
else 
{
    echo "<script>window.history,back()</script>";
}


?>