<?php 
    include '../config/koneksi.php';

    $id = $_GET['id'];

    $data = mysqli_query($conn, "SELECT * FROM kategori WHERE id = 'id'");
    $id = mysqli_fetch_assoc($data);
?>

<form method="POST">
    <input type="text" name="nama" value="<? $id['nama']; ?>">
    <button name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
        $nama = $_POST['nama'];

        mysqli_query($conn, "UPDATE kategori Set nama='$nama' Where id='id' ");
        header("Location: kategori.php");
    }
?>