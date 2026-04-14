<?php
include '../config/koneksi.php';
$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM berita WHERE id=$id"));
?>

<form method="POST">
    Judul: <input type="text" name="judul" value="<?= $data['judul'] ?>"><br>
    Isi: <textarea name="isi"><?= $data['isi'] ?></textarea><br>
    <button name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE berita SET 
        judul='$_POST[judul]', 
        isi='$_POST[isi]' 
        WHERE id=$id");

    header("Location: berita.php");
}
?>