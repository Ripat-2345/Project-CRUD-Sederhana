<?php
include 'koneksi.php';

$id_mhs = $_GET['id_mhs'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_mahasiswa WHERE id_mhs = '$id_mhs'");
if ($query) {
    header('location:../index.php');
}
