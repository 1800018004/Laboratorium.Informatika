<?php
include "konek.php";
// menyimpan data id kedalam variabel
$idbarang  = $_GET['idbarang'];
// query SQL untuk insert data
$query="DELETE from stock where idbarang='$idbarang'";
//echo $query;
mysqli_query($konek, $query);
// mengalihkan ke halaman index.php
header('location:datalabor.php');
?>