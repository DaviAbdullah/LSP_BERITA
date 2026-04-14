<?php
    include '../config/koneksi.php';

    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM kategori Where id=$id");

    header("Location: kategori.php");
?>