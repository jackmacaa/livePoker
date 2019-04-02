<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet " href="style.css" />
    <title>Live Poker Tracker</title>
  </head>
  <body>
    <main>
    <nav class="nav">
      <ul>
        <a href="index.html">HOME</a>
        <a href="cash.php">CASH</a>
        <a href="mtt.php">MTT</a>
        <a href="players.php">PLAYERS</a>
      </ul>
    </nav>
    <h1>Cash entry Page </h1>
    <p>Below enter the results for your live cash games then hit add</p>
    <div class="input-cash">
        <form action="includes/cash.input.php" method="GET">
        Date: <input type="text" name="date" > <br>
        blinds: <input type="text" name="blinds"> <br>
        buy-in: <input type="text" name="buyin"> <br>
        cashout: <input type="text" name="cashout" ><br>
        <button type="submit" value="submit">ADD </button>
        </form>
    </div>
    <p></p>
    <div class="cash-table">
    <?php
    include_once 'includes/db.php';

    $result = mysqli_query($conn, "SELECT * FROM cash");
    

    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Date</th>
    <th>Blinds</th>
    <th>Buy-in</th>
    <th>Cashout</th>
    </tr>";
    
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['blinds'] . "</td>";
    echo "<td>" . $row['buyin'] . "</td>";
    echo "<td>" . $row['cashout'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    
    mysqli_close($conn);
    ?>
  </div>
  <div class="delete-cash">
      <p>Please input the id of the entry you want to delete:</p>
        <form action="includes/cash.delete.php" method="GET">
        id: <input type="text" name="idDel" > <br>
        <button type="submit" value="submit">DELETE </button>
        </form>
    </div>
  </main>
  </body>
</html>
