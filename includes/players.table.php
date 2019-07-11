<?php
    include_once 'includes/db.php';

    $result = mysqli_query($conn, "SELECT * FROM player");

    echo "<table border='1'>
    <caption>Players </caption>
    <tr>
    <th>Name</th>
    <th>Type</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    $id = $row['id']; 

    echo    "<form action='includes/player.delete.php' method='GET'>";
    echo    "<tr>";
    echo    "<td>" . $row['playerName'] . "</td>";
    echo    "<td>" . $row['type'] .  "</td>";
    echo    "<input type='hidden' id='playerDel' name='playerDel' value='$id'>";
    echo    "<td><button type='submit' value='submit'>Delete</button> </td>";
    echo    "</form>";
    echo    "</tr>";
    }

    echo "</table>";