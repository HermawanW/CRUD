<?php
include 'koneksi.php';

//ambil data dari URL
$id = $_GET["id"];

//query data siswa berdasar id
$sw = query("SELECT * FROM siswa WHERE id = $id")[0];

if ( isset($_POST["submit"]) ) {
    
    //ngecek data berhasil diedit atau tidak
    if (edit($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                document.location.href='index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Diubah');
                document.location.href='index.php';
            </script>
        ";
    }


}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah data siswa</title>
</head>
<body>
    
    <h1>Ubah Data Siswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $sw["id"] ?>">

        <label for="nis"> Nis : </label>
        <input type="text" name="nis" id="nis" required 
                value="<?= $sw["nis"] ?>"> <br>

        <label for="nama"> Nama : </label>
        <input type="text" name="nama" id="nama" required
                value="<?= $sw["nama"] ?>"><br>

        <label for="kelas"> Kelas : </label>
        <select name="kelas" id="kelas" value="<?= $sw["kelas"] ?>">
                <option> x</option>
                <option> xi</option>
                <option> xii</option>
                <option> xiii</option>
            </select><br>

        <label for="jurusan"> Jurusan : </label>
        <select name="jurusan" id="jurusan" value="<?= $sw["jurusan"] ?>">
                <option> Teknik Informatika</option>
                <option> Pertanian</option>
                <option> Teknik Permesinan</option>
            </select><br>

        <button type="submit" name="submit">Ubah data</button>
    </form>

</body>
</html>