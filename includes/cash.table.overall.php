    <?php
    include_once 'includes/db.php';

    $result = mysqli_query($conn, "SELECT * FROM cash");
    $overall = 0;
    $spent = 0;
    $won = 0;
    
    while($row = mysqli_fetch_array($result))
    {
    $profit = 0;
    $profit = $row['cashout'] - $row['buyin'];

    $won = $won + $row['cashout'];
    $spent = $spent + $row['buyin'];
    $overall = $won - $spent;
    }

    echo "<table border='1'>
    <caption>Overall </caption>
    <tr>
    <th>Spent</th>
    <th>Won</th>
    <th>Profit</th>
    </tr>";
   
    echo "<tr>";
    echo "<td>" . '$ '. $spent . "</td>";
    echo "<td>" . '$ '. $won . "</td>";
    echo "<td>" . '$ '. $overall . "</td>";
    echo "</tr>";
    echo "</table>";

    mysqli_close($conn);
    