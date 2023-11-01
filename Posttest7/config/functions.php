<?php

$conn = mysqli_connect("localhost", "root", "", "data_bis");

function tambahBus($data, $gambar)
{
    global $conn;
    $namaBus = $data['nama-bus'];
    $fasilitas = $data['fasilitas'];
    $jumlahUnit = $data['jumlah-unit'];
    $hargaSewa = $data['harga-sewa'];

    $namaGambar = $gambar['name'];
    $namaGambar = date("Y-m-d") . ' ' . $namaGambar;

    $query = "INSERT INTO bus VALUES (NULL, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssdds", $namaBus, $fasilitas, $jumlahUnit, $hargaSewa, $namaGambar);
    mysqli_stmt_execute($stmt);

    move_uploaded_file($gambar['tmp_name'], "../admin/gambar-upload/$namaGambar");
    header('Location: ../admin/index.php');
}

function updateBus($data, $gambar, $id)
{
    global $conn;

    $namaBus = $data['nama-bus'];
    $fasilitas = $data['fasilitas'];
    $jumlahUnit = $data['jumlah-unit'];
    $hargaSewa = $data['harga-sewa'];

    if ($gambar['name'] == "") {
        $query = "UPDATE bus SET nama_bus = ?, fasilitas = ?, jumlah_unit = ?, harga_sewa = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ssddi", $namaBus, $fasilitas, $jumlahUnit, $hargaSewa, $id);
        mysqli_stmt_execute($stmt);
    } else {
        $namaGambar = $gambar['name'];
        $namaGambar = date("Y-m-d") . ' ' . $namaGambar;

        $namaGambarLama = getDataById($id)[0]['gambar'];
        unlink("../admin/gambar-upload/$namaGambarLama");

        $query = "UPDATE bus SET nama_bus = ?, fasilitas = ?, jumlah_unit = ?, harga_sewa = ?, gambar = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ssddsi", $namaBus, $fasilitas, $jumlahUnit, $hargaSewa, $namaGambar, $id);
        mysqli_stmt_execute($stmt);

        move_uploaded_file($gambar['tmp_name'], "../admin/gambar-upload/$namaGambar");
    }

    header('Location: ../admin/index.php');
}

function deleteBus($id)
{
    global $conn;

    $namaGambar = getDataById($id)[0]['gambar'];
    unlink("../admin/gambar-upload/$namaGambar");

    $query = "DELETE FROM bus WHERE id = $id";
    mysqli_query($conn, $query);

    header('Location: ../admin/index.php');
}

function getDataBus()
{
    global $conn;

    $query = "SELECT * FROM bus";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function getDataById($id)
{
    global $conn;

    $query = "SELECT * FROM bus WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $rows = [];
    if ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

if (isset($_POST['tambah-bus'])) {
    tambahBus($_POST, $_FILES['gambar']);
}

if (isset($_POST['edit-bus'])) {
    updateBus($_POST, $_FILES['gambar'], $_GET['id']);
}

if (isset($_GET['idHapus'])) {
    deleteBus($_GET['idHapus']);
}
