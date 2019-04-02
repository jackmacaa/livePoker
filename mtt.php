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
    <nav class="nav">
      <ul>
        <a href="index.html">HOME</a>
        <a href="cash.php">CASH</a>
        <a href="mtt.php">MTT</a>
        <a href="players.php">PLAYERS</a>
      </ul>
    </nav>
    <h1>MTT entry page </h1>
    <p>Below enter the results for your live cash games then hit add</p>
    <div class="input-cash">
        <form action="includes/cash.input.php" method="GET">
        Date: <input type="text" name="date" > <br>
        Name: <input type="text" name="name"> <br>
        Buy-in: <input type="text" name="buyin"> <br>
        Win: <input type="text" name="win"> <br>
        Entrants: <input type="text" name="entrants"> <br>
        Place: <input type="text" name="place"> <br>
        <button type="submit" value="submit">ADD </button>
        </form>
    </div>

    <p>COMING SOON ONCE THE INTERACTION WITH THE DATABASE ON THE CASH PAGE IS COMPLETE</p>
  </body>
</html>
