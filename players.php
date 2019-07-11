<?php require 'partial/nav.php' ?>
  <body>
    <h1>Players notes page</h1>
    <div class="container">

    <div class="control">
    <h1>Toggle Controls </h1>
    <button class="button" onclick="showPlayers()">View Players</button>
    <button class="button" onclick="createPlayer()">Create Player</button>
    <button class="button" onclick="showNotes()">View Notes</button>
    <button class="button" onclick="createNote()">Create Note</button>

    </div>

    <div id="add-player">
        <form action="includes/player.input.php" method="GET">
        <label for="date">Name:</label> <br>
        <input type="text" name="playerName" > <br><br>
        <label for="date">Type:</label> <br>
        <select name="type">
         <option value="lag">LAG</option>
         <option value="tag">TAG</option>
         <option value="nit">NIT</option>
         <option value="unknown" selected="selected">Unknown</option>
        </select>
        <button type="submit" value="submit">Add </button>
        </form>
    </div>

  <div id="player-table">
  <?php require_once 'includes/players.table.php' ?>
    </div>

    <div id="notes"> 
    <form action="includes/note.input.php" method="GET">
      <label for="playerName">Player Name:</label> <br>
      <?php require'includes/notes.dropdown.php'?>
      <label for="descript">Note description:</label> <br>
      <input type="text" name="descript" > <br><br>
      <label for="preflop">Preflop:</label> <br>
      <input type="text" name="preflop" > <br><br>
      <label for="flop">Flop:</label> <br>
      <input type="text" name="flop" > <br><br>
      <label for="turn">Turn:</label> <br>
      <input type="text" name="turn" > <br><br>
      <label for="river">River:</label> <br>
      <input type="text" name="river" > <br><br>
      <label for="extra">Extra:</label> <br>
      <input type="text" name="extra" > <br><br>
      <button type="submit" value="submit">Create Note </button>
    </form>
    </div>

    <div id="notes-table">
    <?php require_once 'includes/notes.view.php'?>
    </div>

  </div>
<?php require 'partial/footer.php'; ?>