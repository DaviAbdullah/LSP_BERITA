<?php

$conn = new mysqli("localhost","root","","berita_db");

if (!$conn)  {
    echo "Database gagal tersambung";
}
?>