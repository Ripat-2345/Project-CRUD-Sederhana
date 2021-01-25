<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <center>
        <h1>Tabel Data Mahasiswa</h1>
    </center>
    <table border=1 align="center">
        <center>
            <button><a href="./app/form_mhs.php">Tambah Data Siswa</a></button>
        </center>
        <br>
        <tr>
            <th>No</th>
            <th>ID Mahasiswa</th>
            <th>Nama Mahasiswa</th>
            <th>Jurusan</th>
            <th>Mata Kuliah</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <?php
            include './app/koneksi.php';
            $query = "SELECT * FROM tbl_mahasiswa";
            $tampil = mysqli_query($koneksi, $query);
            $no = 1;
            while ($data = mysqli_fetch_assoc($tampil)) :
            ?>
                <td><?= $no++; ?></td>
                <td><?= $data['id_mhs']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['jurusan']; ?></td>
                <td><?= $data['mata_kuliah']; ?></td>
                <td>
                    <button><a href="./app/ubah.php?id_mhs=<?= $data['id_mhs']; ?>" onclick="confirm('Anda yakin ingin mengubah Data')">Ubah</a></button>|<button><a href="./app/hapus.php?id_mhs=<?= $data['id_mhs']; ?>" onclick="confirm('Anda yain ingin menghapus Data')">Hapus</a></button>
                </td>
        </tr>
    <?php endwhile; ?>
    </table>
</body>

</html>