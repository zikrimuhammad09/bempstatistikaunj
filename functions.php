<?php
$conn = mysqli_connect('localhost', 'root', '', 'bempstatistika');

function login($query)
{
    global $conn;
    $validasi = mysqli_query($conn, $query);
    return $validasi;
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $name = htmlspecialchars($data["name"]);
    $nim = htmlspecialchars($data["nim"]);
    $angkatan = htmlspecialchars($data["angkatan"]);
    $departemen = htmlspecialchars($data["departemen"]);
    $email =  htmlspecialchars($data["email"]);

    $query = "INSERT INTO anggota VALUES ('','$name','$nim','$angkatan','$departemen','$email')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
