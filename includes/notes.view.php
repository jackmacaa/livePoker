<?php
    include_once 'includes\db.php';

    $result = mysqli_query($conn, "SELECT * FROM notes");

    echo "<table border='1'>
    <caption>Notes </caption>
    <tr>
    <th>Player Name</th>
    <th>Description</th>
    <th>Preflop</th>
    <th>Flop</th>
    <th>Turn</th>
    <th>River</th>
    <th>Extra</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    $id = $row['id']; 

    echo    "<tr>";
    echo    "<td>" . $row['playerName'] . "</td>";
    echo    "<td>" . $row['descript'] . "</td>";
    echo    "<td>" . $row['preflop'] .  "</td>";
    echo    "<td>" . $row['flop'] .  "</td>";
    echo    "<td>" . $row['turn'] .  "</td>";
    echo    "<td>" . $row['river'] .  "</td>";
    echo    "<td>" . $row['extra'] .  "</td>";

    echo    "</tr>";
    }

    echo "</table>";
 