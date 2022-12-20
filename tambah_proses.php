<?php

    
if (isset($_POST['tambah'])){
    include_once 'koneksi.php';
    $nim    =$_POST['nim'];
    $nama    =$_POST['nama'];
    $gender    =$_POST['gender'];
    $alamat    =$_POST['alamat'];
    $foto = $_FILES['foto']['name'];
    $lokasi_foto = $_FILES['foto']['tmp_name'];
    $folder = "./images/";
    

    if ($foto != "") {
        $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
        $x = explode('.', $foto);
        $ekstensi = strtolower(end($x));
        $angka_acak = rand(1,999);
        $nama_foto_baru = $angka_acak . '-' . $foto;
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($lokasi_foto, $folder . $nama_foto_baru);
            $input = mysqli_query($connection, "insert into mahasiswa3 values 
    ('$nim','$nama','$gender','$alamat','$nama_foto_baru')");
        if ($input)
    {
        echo "<h3>Data berhasil ditambahkan</h3>";
        echo "<script>window.location='crud.php'</script>";
    }
    else
    {
        echo "gagal menambahkan data";
            
    }
        } else {
            echo "Ekstensi yang boleh hanya jpg,png,dan,jpeg";
        }
    } else {
        $input = mysqli_query($connection, "insert into mahasiswa3 values 
    ('$nim','$nama','$gender','$alamat','-')");
        if ($input)
    {
        echo "<h3>Data berhasil ditambahkan</h3>";
        echo "<script>window.location='crud.php'</script>";
    }
    else
    {
        echo "gagal menambahkan data";
            
    }
    }
}
else 
{
    // echo "<script>window.history.back()</script>";
}
?>