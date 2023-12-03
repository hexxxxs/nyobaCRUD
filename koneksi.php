<?php


// koneksi ke database
$user = "root";
$lokasi = "localhost";
$pass = "";
$database = "nyoba_crud";
$koneksi = mysqli_connect($lokasi, $user, $pass, $database);


if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// echo "Koneksi berhasil";


function showThedata($code)
{
    global $koneksi;
    $hasil =  mysqli_query($koneksi, $code);
    return $hasil;
}

function editdata($data)
{
    global $koneksi;
    $id = htmlspecialchars($_POST['id']);
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $ukm = htmlspecialchars($_POST['ukm']);

    $query = "UPDATE user SET nama='$nama', email='$email', ukm='$ukm' WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapusdata($data)
{
    global $koneksi;
    $id = htmlspecialchars($data['id_hapus']);
    $query = "DELETE FROM user WHERE id = $id";
    return mysqli_query($koneksi, $query);
}

function createData($data)
{
    global $koneksi;
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $ukm = htmlspecialchars($data['ukm']);

    $query = "INSERT INTO user VALUES (NULL,'$nama','$email','$ukm')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
