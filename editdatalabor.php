<?php
include "konek.php";
// menyimpan data kedalam variabel
 	$idbarang = $_POST['idbarang'];
    $namabarang = $_POST['namabarang'];
    $merkbarang = $_POST['merkbarang'];
    $stock = $_POST['stock'];



echo $idbarang;
// query SQL untuk insert data
$query="UPDATE stock SET idbarang='$idbarang',namabarang='$namabarang',merkbarang='$merkbarang',stock='$stock' where idbarang='$idbarang'";
mysqli_query($konek, $query);
echo $query;
// mengalihkan ke halaman index.php
header("location:datalabor.php");
?>