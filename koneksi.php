<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "undangan";

$conn = mysqli_connect($host, $user, $pass, $db);

function submit($data)
{
    global $conn;

    $nama = $data["nama"];
    $email = $data["email"];
    $isi = $data["isi"];

    $query = ("INSERT INTO buku_tamu VALUES ('', '$nama', '$email', '$isi')");
    mysqli_query($conn, $query);
}