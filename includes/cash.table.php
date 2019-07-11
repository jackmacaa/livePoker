    <?php
    include_once 'includes/db.php';

    $result = mysqli_query($conn, "SELECT * FROM cash");
    $overall = 0;
    $spent = 0;
    $won = 0;
    
    echo "<table border='1'>
    <caption>Cash game results </caption>
    <tr>
    <th>ID</th>
    <th>Date</th>
    <th>Blinds</th>
    <th>Buy-in</th>
    <th>Cashout</th>
    <th>Profit</th>
    <th>Remove</th>
    
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    $profit = $row['cashout'] - $row['buyin'];
    $id = $row['id'];  
    
    echo " <form action='includes/cash.delete.php' method='GET'> ";

    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['blinds'] . "</td>";
    echo "<td>" . $row['buyin'] . "</td>";
    echo "<td>" . $row['cashout'] . "</td>";
    echo "<td>" . $profit . "</td>";
    echo "<input type='hidden' id='idDel' name='idDel' value='$id'>";
    echo "<td><button type='submit' value='submit'>Delete</button> </td>";

    echo "</form>";
    
    echo "</tr>";

    $won = $won + $row['cashout'];
    $spent = $spent + $row['buyin'];
    $overall = $won - $spent;
    }

    echo "</table>";