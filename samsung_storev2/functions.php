<?php
$conn=mysqli_connect("localhost","root","","samsung_store");

function query($query){
    global $conn;
    $result =mysqli_query($conn,$query);
    $rows = [];
    while($row =mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($data){
    global $conn;
    $id = $_POST['id'];
    $tipe = $_POST['tipe'];
    $processor = $_POST['processor'];
    $memory =  $_POST['memory'];
    $color =  $_POST['color'];
    $price =  $_POST['price'];
if ($id < 0 ) {
        echo "
        <script>
            alert('IMEI Wajib Diisi!');
            window.history.back();
        </script>";
} else {
    $query = "INSERT INTO smartphone VALUES ('$id','$tipe','$processor','$memory','$color', '$price')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
        echo "
        <script>
            header('Location:index.php #tabel1');;
        </script>
        ";
    }
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM smartphone WHERE id = $id");
    return mysqli_affected_rows($conn);
}
function ubah($data){
    global $conn;
    // ambil data dr tiap elemen form
    $id = $data["id"];
    $tipe = $data["tipe"];
    $processor = $data["processor"];
    $memory = $data["memory"];
    $color = $data["color"];
    $price = $data["price"];

    // cek apakah tombol submit udah dipencet atau belum
    
    $query = "UPDATE smartphone SET 
                id = '$id',
                tipe =  '$tipe',
                processor = '$processor',
                memory = '$memory',
                color = '$color',
                price ='$price'  
               WHERE id = $id 
            ";

    // query insert data
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}
?>