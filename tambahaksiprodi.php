<?php
require 'koneksi.php';

$prodi = $_POST['namaprodi'];

$query ="INSERT INTO prodi (nama_prodi) VALUES ('$prodi')";

mysqli_query($conn, $query);

if(mysqli_affected_rows($conn) > 0 ) {
    echo "
            <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href='prodi.php';
            </script>  
 
            ";
} else {
    echo "
    <script>
    alert('Data Gagal Ditambahkan');
    </script>  
    
    ";
echo mysqli_error($conn);
};

?>