<?php
    include_once 'db.php';

    $playerName = $_GET['playerName'];
    $type = $_GET['type'];


    $sql = "INSERT INTO player (playerName, type) VALUES ('$playerName', '$type' );";
    mysqli_query($conn, $sql);

    header("Location: ../players.php");