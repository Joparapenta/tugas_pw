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

if(isset($_GET['nim'])){
    include ('koneksi.php');
    $nim        =$_GET['nim'];
    $cek   =mysqli_query($connection,"select nim from mahasiswa3 
    where nim ='$nim'") or die (mysqli_error());

    if (mysqli_num_rows($cek)==0)
    {
        echo "<script>window.history.back()</script>";
    }
    else 
    {
        $del  =mysqli_query($connection,"delete from mahasiswa3 where nim ='$nim'");
        if ($del){
            echo "<h3>Data mahasiswa berhasil dihapus</h3>";
            echo "<script>window.location =crud.php;</script>";
        }
        else 
        {
            echo "<h2>gagal menghapus data</h2>";
            echo "<a href = 'crud.php'>Kembali </a>";
        }
    }
}
else 
{
    echo "<script>window.history.back()</script>";
}
?>

</body>