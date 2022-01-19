<?php
$conn = mysqli_connect('localhost', 'root', '', 'bempstatistika');

function login($query)
{
    global $conn;
    $validasi = mysqli_query($conn, $query);
    return $validasi;
}
