<?php
include "conn.php";
if(isset($_POST['kirim'])) {


    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
   


    $sql = mysqli_query($conn, "INSERT INTO komentar VALUES ('', '$nama', '$email', '$komentar', CURRENT_DATE())");
    echo "<script>alert ('Komentar Berhasil Dikirim');window.location.href='index.php?page=1#kontak'; </script>";
}