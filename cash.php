<?php require 'partial/nav.php' ?>

  <body>
  <h1>Cash entry Page </h1>
  <div class="container">

    <div class="input-cash">
        <form action="includes/cash.input.php" method="GET">
        <label for="date">Date:</label> <br>
        <input type="text" name="date" > <br><br>
        <label for="date">Blinds:</label> <br>
        <input type="text" name="blinds"> <br><br>
        <label for="date">Buy-in:</label> <br> 
        <input type="text" name="buyin"> <br><br>
        <label for="date">Cashout:</label> <br> 
        <input type="text" name="cashout" ><br>
        <button type="submit" value="submit">Add </button>
        </form>
    </div>

  <div class="cash-table">
      <?php require 'includes/cash.table.php'; ?>
    </div>
  <div class="cash-table-overall">
      <?php require 'includes/cash.table.overall.php'; ?>
   </div>
  </div>
<?php require 'partial/footer.php'; ?>