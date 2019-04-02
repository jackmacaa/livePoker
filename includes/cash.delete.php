<?php
    include_once 'db.php';

    $id = $_GET['idDel'];

    $sql = "DELETE FROM cash WHERE id=$id";
    mysqli_query($conn, $sql);

    header("Location: ../cash.php");