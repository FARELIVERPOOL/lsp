<?php
    $conn = mysqli_connect("localhost","root","","db_usk");
    $result = mysqli_query($conn,"SELECT * FROM komentar");
?>