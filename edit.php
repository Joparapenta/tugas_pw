<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
      
<?php
include ('koneksi.php');
$nim=$_GET['nim'];
$show=mysqli_query($connection,"select *from mahasiswa3 where nim='$nim'");
if(mysqli_num_rows($show)==0)
{
    echo '<script>window.history.back()</script>';

}
else 
{
    $d = mysqli_fetch_assoc($show);
}



?>

<form action="edit_proses.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="nim" value="<?php echo $nim;?>">
    <table>
    <tr>
            <td> Foto</td>
            <td>:</td>
            <td>
                <img src="images/<?php echo $d['foto']; ?>" width="150px" float="left">
                <input type="file" name="foto" size="33" required>
            </td>
        </tr>
        <tr>
            <td> Nama Lengkap</td>
            <td>:</td>
            <td>
                <input type="text" name="nama" size="33" value="<?php echo $d['nama']?>" required>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td>
                <select name="gender" required >
                    <option value="">Pilih</option>
                    <option value="Pria"><?php if ($d['gender']=='Pria'){echo 'selected';}?>>Pria</option>
                    <option value="Wanita"><?php if ($d['gender']=='Wanita'){echo 'selected';}?>>Wanita</option>
                </select>
            </td>
        </tr>
        <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>
            <input type="text" name="alamat" size="33" value="<?php echo $d['alamat'];?>" required >
        </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td><input type="submit" name="simpan" value="simpan"></td>
        </tr>
    </table>
</form>
</body>
</html>