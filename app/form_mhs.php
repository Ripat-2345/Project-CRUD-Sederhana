<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $id_mhs = $_POST['id_mhs'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $mata_kuliah = $_POST['mata_kuliah'];

    $query = mysqli_query($koneksi, "INSERT INTO tbl_mahasiswa VALUES ('$id_mhs', '$nama','$jurusan','$mata_kuliah')");
    if ($query) {
        header('location:../index.php');
        return "<script>alert('Data Berhasil Tertambah')</script>";
    } else {
        echo 'Data gagal tersimpan';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
</head>

<body>
    <form action="" method="POST">
        <table border=1 align="center">
            <center>
                <h1>Tambah Data Mahasiswa</h1>
            </center>
            <tr>
                <input type="number" name="id_mhs" hidden>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td><input type="text" name="mata_kuliah"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="simpan" value="Simpan" align="center"></td>
            </tr>
        </table>
    </form>
</body>

</html>