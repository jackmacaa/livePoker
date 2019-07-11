<?php
    include_once 'db.php';

    $id = $_GET['playerView'];
    $sql = "SELECT * FROM notes";

    $result = mysqli_query($conn, $sql );

    echo "<table border='1'>
    <caption>Players </caption>
    <tr>
    <th>Name</th>
    <th>Type</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    
    echo    "<tr>";
    echo    "<td>" . $row['playerName'] . "</td>";
    echo    "<td>" . $row['preflop'] .  "</td>";

    echo    "</tr>";
    }

    echo "</table>";

