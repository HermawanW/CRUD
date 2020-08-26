<?php
//memanggil data dari file koneksi.php
include 'koneksi.php';
$siswa = query("SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
</head>
<body>
    
<h1>Daftar Siswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>

        <th>No </th>
        <th>Nis </th>
        <th>Nama </th>
        <th>Kelas </th>
        <th>Jurusan </th>
        <th>Aksi </th>

    </tr>
    <?php $i = 1; ?>
    <?php foreach( $siswa as $row ) : ?>
    <tr>
    
        <td><?= $i; ?></td>
        <td><?= $row["nis"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["kelas"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
        <td><a href="edit.php?id=<?= $row["id"]; ?>">
                Edit </a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>
                "onclick="return confirm('Apakah anda yakin ingin menghapus ?');">
                Hapus</a></td> 

    </tr>
    <?php $i ++; ?>
    <?php endforeach ?>

</table><br><br>

<a href="tambah.php">Tambah data siswa</a>

</body>
</html>
