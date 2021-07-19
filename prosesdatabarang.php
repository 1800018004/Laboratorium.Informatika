<?php
session_start();
    include'konek.php';

    $idbarang = $_POST['idbarang'];
    $namabarang = $_POST['namabarang'];
    $merkbarang = $_POST['merkbarang'];
    $stock = $_POST['stock'];

    
    

        $query = mysqli_query($konek,"INSERT INTO stock (idbarang,namabarang,merkbarang,stock) VALUES ('$idbarang', '$namabarang', '$merkbarang', '$stock')");

    //cek apakah udah diinput atau belum
    //echo $query;
mysqli_query($konek, $query);
// mengalihkan ke halaman index.php
header('location:datalabor.php');

?>