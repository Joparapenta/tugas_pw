<?php
if (isset($_POST['register'])) {
    include_once 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
}
$register = mysqli_query($connection, "INSERT INTO user values
        ('$username','$password')");

        if($register) {
            echo "<h3>User berhasil ditambahkan</h3>";
            echo "<script>window.location='index.php'</script>";
        }
        else
        {
            echo "user menambahkan data";
                
        }
?>