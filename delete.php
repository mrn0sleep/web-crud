<?php

    include 'connection.php';
    $id = $_GET['id'];
    $sqldelete = "DELETE FROM buku WHERE id='$id'";
    mysqli_query($conn, $sqldelete);

    header("location: index.php")

?>