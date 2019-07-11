<?php
    include_once 'db.php';

    $result = mysqli_query($conn, "SELECT * FROM player");

    echo "<select name='playerName'>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value=" . $row['playerName'] . ">" . $row['playerName'] . "</option>";
    }

    echo "</select>";