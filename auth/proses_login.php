<?php
session_start();
include '../config/koneksi.php';

if (isset($_POST['username'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $data = mysqli_fetch_assoc($query);

    if ($data) {
        $_SESSION['login'] = true;
        $_SESSION['id_user'] = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap']; // Pastikan kolom ini ada di DB
        
        header("Location: ../admin/dashboard.php");
        exit;
    } else {
        echo "<script>alert('Login Gagal!'); window.location='login.php';</script>";
    }
}
?>