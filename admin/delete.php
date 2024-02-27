<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tutorial WHERE id_tutorial='$id'");
header("location:../table.php");
?>