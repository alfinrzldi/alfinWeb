<?php
session_start();
require "koneksi.php";

$user = $_POST['user'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM admin WHERE user='$user'");

$row = mysqli_fetch_assoc($result);



if (password_verify ($password, $row['password'])){
    $_SESSION['login'] = true;
    $_SESSION['nama'] = $row['user'];
    $_SESSION['foto'] = 'poison.jpg';
    $_SESSION['hakakses'] = 'admin';
     header("location: index.php");
} else {
    echo "
            <script>
                alert('Tonton oppenheimer terlebih dahulu');
                document.location.href='login.php';
            </script>
    ";
}


?>