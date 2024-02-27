<?php
include '../koneksi.php';

$namaFile = $_FILES['thumbnail']['name'];

$namaSementara = $_FILES['thumbnail']['tmp_name'];

$judul = $_POST['judul'];

$video = $_POST['video'];

$id=$_POST['id_tutorial'];

$deskripsi = $_POST['deskripsi'];

$namaFile2 = $_FILES['alat_bahan']['name'];

$namaSementara2 = $_FILES['alat_bahan']['tmp_name'];

$namaFile3 = $_FILES['hasil']['name'];

$namaSementara3 = $_FILES['hasil']['tmp_name'];

$dirUpload = "../images/";

$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

$terupload2 = move_uploaded_file($namaSementara2, $dirUpload.$namaFile2);

$terupload3 = move_uploaded_file($namaSementara3, $dirUpload.$namaFile3);

if ($terupload || $terupload2 || $terupload3) {
	mysqli_query($koneksi, "UPDATE tutorial SET judul='$judul', deskripsi='$deskripsi', alat_bahan='$namaFile2', thumbnail='$namaFile', video='$video' WHERE id_tutorial='$id'");

	mysqli_query($koneksi, "UPDATE gambar SET gambar ='$namaFile3' WHERE id_tutorial='$id'");
	echo "Upload berhasil!<br/>";

	echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";

	header("location:table.php");
} else {

    echo "Upload Gagal!";
}
?>