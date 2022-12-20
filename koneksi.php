<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="mahasiswa_pw3";

    //koneksi ke database
    $connection=mysqli_connect($servername,$username,$password,$database);

    if (!$connection){
        die("Connection failed: ".mysqli_connect_error());
    }
    echo "Connection Success";
?>