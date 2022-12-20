<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])){
header("location:login.php");
exit();
}
if(isset($_SESSION['username'])){
$username = $_SESSION['username'];
}
?>
<html>

<head>
    <title>Home</title>
</head>

<body>
    Welcome, <?php echo $_SESSION['username']; echo
" "?><br><a href="logout.php">Logout</a>
</body>-

</html>