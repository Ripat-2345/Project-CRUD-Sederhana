<?php
include 'koneksi.php';

$id_mhs = $_GET['id_mhs'];
$query = "SELECT * FROM tbl_mahasiswa WHERE id_mhs = '$id_mhs'";
$tampil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($tampil);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>

<body>
    <center>
        <h1>Ubah Data Mahasiswa</h1>
    </center>

    <form action="" method="post">
        <table border=1 align="center">
            <tr>
                <input type="number" name="id_mhs" value="<?= $data['id_mhs']; ?>" hidden>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?= $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value="<?= $data['jurusan']; ?>"></td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td><input type="text" name="mata_kuliah" value="<?= $data['mata_kuliah']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="ubah" value="Ubah"></td>
            </tr>
        </table>
    </form>
</body>

<?php

if (isset($_POST['ubah'])) {
    $id_mhs = $_POST['id_mhs'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $mata_kuliah = $_POST['mata_kuliah'];

    $update = mysqli_query($koneksi, "UPDATE tbl_mahasiswa SET nama = '$nama', jurusan = '$jurusan', mata_kuliah = '$mata_kuliah' WHERE id_mhs= $_GET[id_mhs]");
    if ($update) {
        header('location:../index.php');
    }
}

?>

</html>