<?php
    include_once 'db.php';

    $date = $_GET['date'];
    $blinds = $_GET['blinds'];
    $buyin = $_GET['buyin'];
    $cashout = $_GET['cashout'];

    $sql = "INSERT INTO cash (date, blinds, buyin, cashout) VALUES ('$date', '$blinds', '$buyin', '$cashout');";
    mysqli_query($conn, $sql);

    header("Location: ../cash.php");