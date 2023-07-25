<?php 
require 'functions.php';
$id = $_GET["id"];
if (hapus($id)>0){
    echo "
    <script>
        document.location.href = 'index.php #tabel1';
    </script>
    ";
}else {
    echo "
    <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
    </script>
    ";
}
?>