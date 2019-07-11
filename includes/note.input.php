<?php
    include_once 'db.php';

    $playerName = $_GET['playerName'];
    $descript = $_GET['descript'];
    $preflop = $_GET['preflop'];
    $flop = $_GET['flop'];
    $turn = $_GET['turn'];
    $river = $_GET['river'];
    $extra = $_GET['extra'];


    $sql = "INSERT INTO notes (playerName, descript, preflop, flop, turn, river, extra) 
            VALUES ('$playerName', '$descript', '$preflop', '$flop' , '$turn' , '$river' , '$extra' );";
    mysqli_query($conn, $sql);

    header("Location: ../players.php");