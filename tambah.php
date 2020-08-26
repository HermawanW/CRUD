<?php
include 'koneksi.php';

if ( isset($_POST["submit"]) ) {
    //ngecek data berhasil atau tidak
    if (tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href='index.php';
            </script>
        ";
    } else {
        
    }


}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah data siswa</title>
</head>
<body>
    
    <h1>Tambah Data Siswa</h1>

    <form action="" method="post">
        <label for="nis"> Nis : </label>
        <input type="text" name="nis" id="nis" required><br>

        <label for="nama"> Nama : </label>
        <input type="text" name="nama" id="nama" required><br>

        <label for="kelas"> Kelas : </label>
            <select name="kelas" id="kelas">
                <option> x</option>
                <option> xi</option>
                <option> xii</option>
                <option> xiii</option>
            </select><br>

        <label for="jurusan"> Jurusan : </label>
            <select name="jurusan" id="jurusan">
                <option> Teknik Informatika</option>
                <option> Pertanian</option>
                <option> Teknik Permesinan</option>
            </select><br>

        <button type="submit" name="submit">Tambah data</button>
    </form>

</body>
</html>