<?php
    include_once 'db.php';

    $id = $_GET['playerDel'];

    $sql = "DELETE FROM player WHERE id=$id";
    mysqli_query($conn, $sql);

    header("Location: ../players.php");