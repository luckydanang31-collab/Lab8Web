<?php
include_once 'koneksi.php';

$id = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) : '';
if ($id !== '') {
    $sql = "DELETE FROM data_barang WHERE id_barang = '{$id}'";
    mysqli_query($conn, $sql);
}

header('location: index.php');
exit;
?>