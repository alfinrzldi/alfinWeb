<?php
session_start();
require "koneksi.php";

$nim = $_POST['nim'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim='$nim'");

$row = mysqli_fetch_assoc($result);

if (password_verify ($password, $row['password'])){
    $_SESSION['login'] = true;
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['foto'] = $row['foto'];
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