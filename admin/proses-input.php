<?php
include '../koneksi.php';

$namaFile = $_FILES['thumbnail']['name'];

$namaSementara = $_FILES['thumbnail']['tmp_name'];

$judul = $_POST['judul'];

$deskripsi = $_POST['deskripsi'];

$video = $_POST['video'];

$namaFile2 = $_FILES['alat_bahan']['name'];

$namaSementara2 = $_FILES['alat_bahan']['tmp_name'];

$namaFile3 = $_FILES['hasil']['name'];

$namaSementara3 = $_FILES['hasil']['tmp_name'];

$dirUpload = "../images/";

$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

$terupload2 = move_uploaded_file($namaSementara2, $dirUpload.$namaFile2);

$terupload3 = move_uploaded_file($namaSementara3, $dirUpload.$namaFile3);

if ($terupload && $terupload2 && $terupload3) {
	mysqli_query($koneksi,"INSERT INTO tutorial(`judul`, `deskripsi`, `alat_bahan`, `thumbnail`,`video`) VALUES('$judul','$deskripsi','$namaFile2','$namaFile','$video')");

	$sql = "select max(id_tutorial) as last_id from tutorial limit 1";
	
    $hasil = mysqli_query($koneksi,$sql);
	
    $row = mysqli_fetch_array($hasil);
	
    $lastId = $row['last_id'];

	mysqli_query($koneksi,"INSERT INTO gambar(`id_tutorial`,`gambar`) VALUES('$lastId','$namaFile3')");
	echo "Upload berhasil!<br/>";

	echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";

	header("location:table.php");
} else {

    echo "Upload Gagal!";
}
?>