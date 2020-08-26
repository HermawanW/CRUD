<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","latihanweb");

//koneksi query
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//koneksi tambah data
function tambah($data) {
    global $conn;
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $query = "INSERT INTO siswa
             VALUES ('', '$nis', '$nama', '$kelas', '$jurusan')
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

//koneksi hapus data
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

//koneksi edit data
function edit($data) {
    global $conn;
    $id = $data["id"];

    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $kelas = $data["kelas"];
    $jurusan = $data["jurusan"];

    $query = "UPDATE siswa SET 
            nis = '$nis',
            nama = '$nama',
            kelas = '$kelas',
            jurusan = '$jurusan'
            WHERE id = $id

            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>